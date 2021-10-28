<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class BoholWeather
 * @package App\Models
 * @version October 28, 2021, 9:31 pm UTC
 *
 * @property string $town
 * @property string $temperature
 * @property string $humidity
 * @property string $weather_status
 */
class BoholWeather extends Model
{

    use HasFactory;

    public $table = 'bohol_weather_api';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'town',
        'temperature',
        'humidity',
        'weather_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'town' => 'string',
        'temperature' => 'string',
        'humidity' => 'string',
        'weather_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'town' => 'required|string|max:255',
        'temperature' => 'required|string|max:255',
        'humidity' => 'required|string|max:255',
        'weather_status' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
