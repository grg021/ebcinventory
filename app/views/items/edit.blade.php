@extends('layouts/layout')
@section('title')
    <h1 class="page-header">New Item</h1>

@stop
@section('content')

<!-- /.row -->
{{ Form::model($item, ['url' => ['items', $item->id], 'method' => 'PATCH']) }}
<div class="row">
    <div class="col-lg-6">
        <div class="well">
            @include('items/partials/itemform')
            <div class="form-group">
                <a href="{{ URL::to('items') }}" class="btn btn-default">
                  <span class="glyphicon glyphicon-list"></span> Back to list of items
                </a>
                <button type="submit" class="btn btn-primary">
                  <span class="glyphicon glyphicon-floppy-disk"></span> Save
                </button>
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@stop