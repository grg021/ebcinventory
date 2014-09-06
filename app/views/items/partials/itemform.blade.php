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
        <div class="form-group {{ errors_check('lifespan', $errors) }}">
            {{ Form::label('lifespan', 'Life Span') }}
            {{ Form::text('lifespan', null, ['class' => 'form-control']) }}
            <p class="help-block">{{ errors_for('lifespan', $errors) }}</p>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group {{ errors_check('quantity', $errors) }}">
            {{ Form::label('quantity', 'Quantity') }}
            {{ Form::text('quantity', null, ['class' => 'form-control']) }}
            <p class="help-block">{{ errors_for('quantity', $errors) }}</p>
        </div>
        <div class="form-group {{ errors_check('datepurchased', $errors) }}">
            {{ Form::label('datepurchased', 'Date Purchased') }}
            {{ Form::text('datepurchased', null, ['class' => 'form-control datepicker']) }}
            <p class="help-block">{{ errors_for('datepurchased', $errors) }}</p>
        </div>
        <div class="form-group {{ errors_check('code', $errors) }}">
            {{ Form::label('code', 'Property Number *') }}
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
<script>
jQuery(document).ready(function($) {
    $('.datepicker').datepicker();
});
</script>