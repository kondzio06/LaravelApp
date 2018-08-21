<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('title', 'Tytuł') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}   
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('description', 'Opis') !!}
    </div>
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}   
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('code', 'Url') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('code', null, ['class' => 'form-control']) !!}   
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit( $submitText  , ['class' => 'btn btn-primary']) !!}
    </div>
</div>