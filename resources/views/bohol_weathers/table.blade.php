<div class="table-responsive">
    <table class="table" id="boholWeathers-table">
        <thead>
            <tr>
                <th>Town</th>
        <th>Temperature</th>
        <th>Humidity</th>
        <th>Weather Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($boholWeathers as $boholWeather)
            <tr>
                <td>{{ $boholWeather->town }}</td>
            <td>{{ $boholWeather->temperature }}</td>
            <td>{{ $boholWeather->humidity }}</td>
            <td>{{ $boholWeather->weather_status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['boholWeathers.destroy', $boholWeather->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('boholWeathers.show', [$boholWeather->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('boholWeathers.edit', [$boholWeather->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
