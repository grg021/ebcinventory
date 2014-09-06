@extends('layouts/layout')
@section('title')
    <h1 class="page-header">New Type</h1>

@stop
@section('content')

<!-- /.row -->
{{ Form::open(['url' => 'categories']) }}
<div class="row">
    <div class="col-lg-6">
        <div class="well">
            <div class="form-group {{ errors_check('name', $errors) }}">
                {{ Form::label('name', 'Name *') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
                <p class="help-block">{{ errors_for('name', $errors) }}</p>
            </div>
            <div class="form-group">
                <a href="{{ URL::to('categories') }}" class="btn btn-default">
                  <span class="glyphicon glyphicon-list"></span> Back to list of Types
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