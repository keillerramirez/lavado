<?php

namespace App\Repositories;

use App\Models\Tipo_lavados;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Tipo_lavadosRepository
 * @package App\Repositories
 * @version May 1, 2018, 10:33 pm UTC
 *
 * @method Tipo_lavados findWithoutFail($id, $columns = ['*'])
 * @method Tipo_lavados find($id, $columns = ['*'])
 * @method Tipo_lavados first($columns = ['*'])
*/
class Tipo_lavadosRepository extends BaseRepository
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
        return Tipo_lavados::class;
    }
}
