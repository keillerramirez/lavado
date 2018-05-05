<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipo_lavadosRequest;
use App\Http\Requests\UpdateTipo_lavadosRequest;
use App\Repositories\Tipo_lavadosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Tipo_lavadosController extends AppBaseController
{
    /** @var  Tipo_lavadosRepository */
    private $tipoLavadosRepository;

    public function __construct(Tipo_lavadosRepository $tipoLavadosRepo)
    {
        $this->tipoLavadosRepository = $tipoLavadosRepo;
    }

    /**
     * Display a listing of the Tipo_lavados.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoLavadosRepository->pushCriteria(new RequestCriteria($request));
        $tipoLavados = $this->tipoLavadosRepository->all();

        return view('tipo_lavados.index')
            ->with('tipoLavados', $tipoLavados);
    }

    /**
     * Show the form for creating a new Tipo_lavados.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_lavados.create');
    }

    /**
     * Store a newly created Tipo_lavados in storage.
     *
     * @param CreateTipo_lavadosRequest $request
     *
     * @return Response
     */
    public function store(CreateTipo_lavadosRequest $request)
    {
        $input = $request->all();

        $tipoLavados = $this->tipoLavadosRepository->create($input);

        Flash::success('Tipo Lavados saved successfully.');

        return redirect(route('tipoLavados.index'));
    }

    /**
     * Display the specified Tipo_lavados.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoLavados = $this->tipoLavadosRepository->findWithoutFail($id);

        if (empty($tipoLavados)) {
            Flash::error('Tipo Lavados not found');

            return redirect(route('tipoLavados.index'));
        }

        return view('tipo_lavados.show')->with('tipoLavados', $tipoLavados);
    }

    /**
     * Show the form for editing the specified Tipo_lavados.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoLavados = $this->tipoLavadosRepository->findWithoutFail($id);

        if (empty($tipoLavados)) {
            Flash::error('Tipo Lavados not found');

            return redirect(route('tipoLavados.index'));
        }

        return view('tipo_lavados.edit')->with('tipoLavados', $tipoLavados);
    }

    /**
     * Update the specified Tipo_lavados in storage.
     *
     * @param  int              $id
     * @param UpdateTipo_lavadosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipo_lavadosRequest $request)
    {
        $tipoLavados = $this->tipoLavadosRepository->findWithoutFail($id);

        if (empty($tipoLavados)) {
            Flash::error('Tipo Lavados not found');

            return redirect(route('tipoLavados.index'));
        }

        $tipoLavados = $this->tipoLavadosRepository->update($request->all(), $id);

        Flash::success('Tipo Lavados updated successfully.');

        return redirect(route('tipoLavados.index'));
    }

    /**
     * Remove the specified Tipo_lavados from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoLavados = $this->tipoLavadosRepository->findWithoutFail($id);

        if (empty($tipoLavados)) {
            Flash::error('Tipo Lavados not found');

            return redirect(route('tipoLavados.index'));
        }

        $this->tipoLavadosRepository->delete($id);

        Flash::success('Tipo Lavados deleted successfully.');

        return redirect(route('tipoLavados.index'));
    }
}
