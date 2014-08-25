@extends('layouts/layout')
@section('title')
    <h1 class="page-header">New Item</h1>

@stop
@section('content')

<!-- /.row -->
{{ Form::open(['url' => 'items']) }}
<div class="row">
    <div class="col-lg-6">
        <div class="well">
            @include('items/partials/itemform')
            <div class="form-group">
                {{ Form::submit('Save New Item', ['class' => 'btn btn-primary']) }}
                {{ link_to('items', 'Cancel') }}
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@stop