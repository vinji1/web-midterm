<!-- Town Field -->
<div class="form-group col-sm-6">
    {!! Form::label('town', 'Town:') !!}
    {!! Form::text('town', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Temperature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('temperature', 'Temperature:') !!}
    {!! Form::text('temperature', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Humidity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('humidity', 'Humidity:') !!}
    {!! Form::text('humidity', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Weather Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('weather_status', 'Weather Status:') !!}
    {!! Form::text('weather_status', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>