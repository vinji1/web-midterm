<?php

namespace App\Repositories;

use App\Models\BoholWeather;
use App\Repositories\BaseRepository;

/**
 * Class BoholWeatherRepository
 * @package App\Repositories
 * @version October 28, 2021, 9:31 pm UTC
*/

class BoholWeatherRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'town',
        'temperature',
        'humidity',
        'weather_status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BoholWeather::class;
    }
}
