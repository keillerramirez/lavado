<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipo_VehiculosRequest;
use App\Http\Requests\UpdateTipo_VehiculosRequest;
use App\Repositories\Tipo_VehiculosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Tipo_VehiculosController extends AppBaseController
{
    /** @var  Tipo_VehiculosRepository */
    private $tipoVehiculosRepository;

    public function __construct(Tipo_VehiculosRepository $tipoVehiculosRepo)
    {
        $this->tipoVehiculosRepository = $tipoVehiculosRepo;
    }

    /**
     * Display a listing of the Tipo_Vehiculos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoVehiculosRepository->pushCriteria(new RequestCriteria($request));
        $tipoVehiculos = $this->tipoVehiculosRepository->all();

        return view('tipo__vehiculos.index')
            ->with('tipoVehiculos', $tipoVehiculos);
    }

    /**
     * Show the form for creating a new Tipo_Vehiculos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo__vehiculos.create');
    }

    /**
     * Store a newly created Tipo_Vehiculos in storage.
     *
     * @param CreateTipo_VehiculosRequest $request
     *
     * @return Response
     */
    public function store(CreateTipo_VehiculosRequest $request)
    {
        $input = $request->all();

        $tipoVehiculos = $this->tipoVehiculosRepository->create($input);

        Flash::success('Tipo  Vehiculos saved successfully.');

        return redirect(route('tipoVehiculos.index'));
    }

    /**
     * Display the specified Tipo_Vehiculos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoVehiculos = $this->tipoVehiculosRepository->findWithoutFail($id);

        if (empty($tipoVehiculos)) {
            Flash::error('Tipo  Vehiculos not found');

            return redirect(route('tipoVehiculos.index'));
        }

        return view('tipo__vehiculos.show')->with('tipoVehiculos', $tipoVehiculos);
    }

    /**
     * Show the form for editing the specified Tipo_Vehiculos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoVehiculos = $this->tipoVehiculosRepository->findWithoutFail($id);

        if (empty($tipoVehiculos)) {
            Flash::error('Tipo  Vehiculos not found');

            return redirect(route('tipoVehiculos.index'));
        }

        return view('tipo__vehiculos.edit')->with('tipoVehiculos', $tipoVehiculos);
    }

    /**
     * Update the specified Tipo_Vehiculos in storage.
     *
     * @param  int              $id
     * @param UpdateTipo_VehiculosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipo_VehiculosRequest $request)
    {
        $tipoVehiculos = $this->tipoVehiculosRepository->findWithoutFail($id);

        if (empty($tipoVehiculos)) {
            Flash::error('Tipo  Vehiculos not found');

            return redirect(route('tipoVehiculos.index'));
        }

        $tipoVehiculos = $this->tipoVehiculosRepository->update($request->all(), $id);

        Flash::success('Tipo  Vehiculos updated successfully.');

        return redirect(route('tipoVehiculos.index'));
    }

    /**
     * Remove the specified Tipo_Vehiculos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoVehiculos = $this->tipoVehiculosRepository->findWithoutFail($id);

        if (empty($tipoVehiculos)) {
            Flash::error('Tipo  Vehiculos not found');

            return redirect(route('tipoVehiculos.index'));
        }

        $this->tipoVehiculosRepository->delete($id);

        Flash::success('Tipo  Vehiculos deleted successfully.');

        return redirect(route('tipoVehiculos.index'));
    }
}
