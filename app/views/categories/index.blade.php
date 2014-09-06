@extends('layouts/layout')

@section('title')
    <h1 class="page-header">Manage Item Types</h1>

@stop
@section('content')
<p>
<a href="{{ URL::to('categories/create') }}" class="btn btn-success">
                  <span class="glyphicon glyphicon-plus"></span> New Type
                </a>
</p>
<hr/>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
    <div class="col-md-4">
         <div class="panel panel-default">
            <div class="panel-heading">
                List of Types
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($types as $type)
                           <tr>
                               <td>{{ $type->id }}</td>
                               <td>{{ $type->name }}</td>
                               <td>
                               		{{ link_to('categories/'.$type->id, 'Open', ['class' => 'btn btn-outline btn-info btn-xs']) }}
                               </td>
                           </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>    
    <hr/>
  <?php
	$presenter = new Illuminate\Pagination\BootstrapPresenter($types);
	?>

	@if ($types->getLastPage() > 1)
		<ul class="pagination">
				{{ $presenter->render() }}
		</ul>
	@endif   
    </div>


    
    <!-- /.col-md-2 -->
</div>
</div>
<!-- /.row -->


@stop