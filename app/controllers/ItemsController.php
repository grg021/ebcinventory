<?php

class ItemsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /items
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('items.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /items/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$cats = Category::lists('name', 'id');
		//dd($cats);
		return View::make('items.create', [ 'cats' => $cats ]);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /items
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only(
			'code', 
			'name',
			'location', 
			'category_id',
			'description'
			);
		

		$item = new Item($input);

		if( $item->save() ) {
			Flash::success('Item saved!');
		} else {
			Flash::error('Please fill-up form below.');
			return Redirect::back()->withErrors($item->errors());
		}
		
		return Redirect::to('items');
	}

	/**
	 * Display the specified resource.
	 * GET /items/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /items/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cats = Category::lists('name', 'id');
		try 
		{
			$item = Item::where('code','=',$id)->firstOrFail();
		}
		catch(Illuminate\Database\Eloquent\ModelNotFoundException $exception)
		{
			return Redirect::home(); 
		}
		return View::make('items.edit', ['cats' => $cats, 'item' => $item]);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /items/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::only(
			'code', 
			'name',
			'location', 
			'category_id',
			'description'
			);
		

		$item = Item::find($id);

		if ( ! $item )
        {
            Flash::error('Item is missing!');
			return Redirect::back()->withErrors($item->errors());
        }

		if ( ! $item->fill($input)->updateUniques())
		{
			Flash::error('Please fill-up form below.');
		}

		Flash::success('Item saved!');
		return Redirect::to('items/'.$item->code.'/edit');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /items/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function getDatatable()
	{
		$items = Item::all();
		// dd($items);
		return Datatable::collection($items)
        ->showColumns('code', 'name')
        ->addColumn('category', function($model) {
        	return $model->category->name;
        })
        ->showColumns('location', 'quantity')
        ->searchColumns('code', 'name')
        ->orderColumns('code', 'name', 'category', 'location', 'quantity')
        ->make();
	}

}