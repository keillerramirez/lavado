<?php

namespace App\Repositories;

use App\Models\Vehiculos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VehiculosRepository
 * @package App\Repositories
 * @version May 1, 2018, 9:54 pm UTC
 *
 * @method Vehiculos findWithoutFail($id, $columns = ['*'])
 * @method Vehiculos find($id, $columns = ['*'])
 * @method Vehiculos first($columns = ['*'])
*/
class VehiculosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Clientes_id',
        'Placa'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vehiculos::class;
    }
}
