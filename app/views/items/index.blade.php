@extends('layouts/layout')
@section('title')
    <h1 class="page-header">Items</h1>

@stop
@section('content')
<p>
{{ link_to('items/create', "New Item", ['class'=>'btn btn-success']) }}
</p>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Item Inventory
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
				{{ Datatable::table()
				    ->addColumn('Code', 'Name', 'Category', 'Location', 'Quantity')       // these are the column headings to be shown
				    ->setUrl(URL::to('api/v1/items'))
				    ->setCustomValues('table-url', "items")
    				->render('items.datatable.template') }}
    			</div>
    		</div>
    	</div>
    </div>
</div>

@stop