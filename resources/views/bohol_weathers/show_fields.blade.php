<!-- Town Field -->
<div class="col-sm-12">
    {!! Form::label('town', 'Town:') !!}
    <p>{{ $boholWeather->town }}</p>
</div>

<!-- Temperature Field -->
<div class="col-sm-12">
    {!! Form::label('temperature', 'Temperature:') !!}
    <p>{{ $boholWeather->temperature }}</p>
</div>

<!-- Humidity Field -->
<div class="col-sm-12">
    {!! Form::label('humidity', 'Humidity:') !!}
    <p>{{ $boholWeather->humidity }}</p>
</div>

<!-- Weather Status Field -->
<div class="col-sm-12">
    {!! Form::label('weather_status', 'Weather Status:') !!}
    <p>{{ $boholWeather->weather_status }}</p>
</div>

