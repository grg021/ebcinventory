<?php

class CategoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */
	public function index()
	{
		$limit = Input::get('limit') ?: $this->getLimit();
		$categories = Category::paginate($limit);
		return View::make('categories.index', [ 'types' => $categories ]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categories
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only(
			'name'
			);
		

		$type = new Category($input);

		if( $type->save() ) {
			Flash::success('Item saved!');
		} else {
			Flash::error('Please fill-up form below.');
			return Redirect::back()->withErrors($type->errors());
		}
		
		return Redirect::to('categories');
	}

	/**
	 * Display the specified resource.
	 * GET /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$type = Category::find($id);
		//dd($signup);

		if (! $type) {
			Flash::error('Type not found!');
			return Redirect::to('categories');
		}

		return View::make('categories.edit', ['type' => $type ]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /categories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::only(
			'name'
			);
		

		$type = Category::find($id);

		if ( ! $type )
        {
            Flash::error('Type is missing!');
			return Redirect::back()->withErrors($type->errors());
        }

		if ( ! $type->fill($input)->updateUniques())
		{
			Flash::error('Please fill-up form below.');
		}

		Flash::success('Type saved!');
		return Redirect::to('categories/'.$type->id);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}