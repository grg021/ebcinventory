<div class="row">
    <div class="col-lg-6">
        <div class="form-group {{ errors_check('name', $errors) }}">
            {{ Form::label('name', 'Name *') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
            <p class="help-block">{{ errors_for('name', $errors) }}</p>
        </div>
        <div class="form-group {{ errors_check('location', $errors) }}">
            {{ Form::label('location', 'Location') }}
            {{ Form::text('location', null, ['class' => 'form-control']) }}
            <p class="help-block">{{ errors_for('location', $errors) }}</p>
        </div>
        <div class="form-group {{ errors_check('category_id', $errors) }}">
            {{ Form::label('category_id', 'Category') }}
            {{ Form::select('category_id', $cats, null, ['class' => 'form-control']); }}
            <p class="help-block">{{ errors_for('category_id', $errors) }}</p>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group {{ errors_check('buyprice', $errors) }}">
            {{ Form::label('buyprice', 'Buying Price') }}
            {{ Form::text('buyprice', null, ['class' => 'form-control']) }}
            <p class="help-block">{{ errors_for('buyprice', $errors) }}</p>
        </div>
        <div class="form-group {{ errors_check('sellprice', $errors) }}">
            {{ Form::label('sellprice', 'Selling Price') }}
            {{ Form::text('sellprice', null, ['class' => 'form-control']) }}
            <p class="help-block">{{ errors_for('sellprice', $errors) }}</p>
        </div>
        <div class="form-group {{ errors_check('code', $errors) }}">
            {{ Form::label('code', 'Code *') }}
            {{ Form::text('code', null, ['class' => 'form-control']); }}
            <p class="help-block">{{ errors_for('code', $errors) }}</p>
        </div>
    </div>
</div>
<div class="form-group {{ errors_check('description', $errors) }}">
    {{ Form::label('description', 'Description *') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']); }}
    <p class="help-block">{{ errors_for('description', $errors) }}</p>
</div>