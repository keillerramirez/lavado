<?php

namespace App\Repositories;

use App\Models\Tipo_Vehiculos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Tipo_VehiculosRepository
 * @package App\Repositories
 * @version May 1, 2018, 10:36 pm UTC
 *
 * @method Tipo_Vehiculos findWithoutFail($id, $columns = ['*'])
 * @method Tipo_Vehiculos find($id, $columns = ['*'])
 * @method Tipo_Vehiculos first($columns = ['*'])
*/
class Tipo_VehiculosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tipo_Vehiculos::class;
    }
}
