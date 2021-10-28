<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBoholWeatherRequest;
use App\Http\Requests\UpdateBoholWeatherRequest;
use App\Repositories\BoholWeatherRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BoholWeatherController extends AppBaseController
{
    /** @var  BoholWeatherRepository */
    private $boholWeatherRepository;

    public function __construct(BoholWeatherRepository $boholWeatherRepo)
    {
        $this->boholWeatherRepository = $boholWeatherRepo;
    }

    /**
     * Display a listing of the BoholWeather.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $boholWeathers = $this->boholWeatherRepository->all();

        return view('bohol_weathers.index')
            ->with('boholWeathers', $boholWeathers);
    }

    /**
     * Show the form for creating a new BoholWeather.
     *
     * @return Response
     */
    public function create()
    {
        return view('bohol_weathers.create');
    }

    /**
     * Store a newly created BoholWeather in storage.
     *
     * @param CreateBoholWeatherRequest $request
     *
     * @return Response
     */
    public function store(CreateBoholWeatherRequest $request)
    {
        $input = $request->all();

        $boholWeather = $this->boholWeatherRepository->create($input);

        Flash::success('Bohol Weather saved successfully.');

        return redirect(route('boholWeathers.index'));
    }

    /**
     * Display the specified BoholWeather.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $boholWeather = $this->boholWeatherRepository->find($id);

        if (empty($boholWeather)) {
            Flash::error('Bohol Weather not found');

            return redirect(route('boholWeathers.index'));
        }

        return view('bohol_weathers.show')->with('boholWeather', $boholWeather);
    }

    /**
     * Show the form for editing the specified BoholWeather.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $boholWeather = $this->boholWeatherRepository->find($id);

        if (empty($boholWeather)) {
            Flash::error('Bohol Weather not found');

            return redirect(route('boholWeathers.index'));
        }

        return view('bohol_weathers.edit')->with('boholWeather', $boholWeather);
    }

    /**
     * Update the specified BoholWeather in storage.
     *
     * @param int $id
     * @param UpdateBoholWeatherRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBoholWeatherRequest $request)
    {
        $boholWeather = $this->boholWeatherRepository->find($id);

        if (empty($boholWeather)) {
            Flash::error('Bohol Weather not found');

            return redirect(route('boholWeathers.index'));
        }

        $boholWeather = $this->boholWeatherRepository->update($request->all(), $id);

        Flash::success('Bohol Weather updated successfully.');

        return redirect(route('boholWeathers.index'));
    }

    /**
     * Remove the specified BoholWeather from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $boholWeather = $this->boholWeatherRepository->find($id);

        if (empty($boholWeather)) {
            Flash::error('Bohol Weather not found');

            return redirect(route('boholWeathers.index'));
        }

        $this->boholWeatherRepository->delete($id);

        Flash::success('Bohol Weather deleted successfully.');

        return redirect(route('boholWeathers.index'));
    }
}
