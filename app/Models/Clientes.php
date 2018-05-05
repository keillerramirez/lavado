<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Clientes
 * @package App\Models
 * @version May 1, 2018, 9:33 pm UTC
 *
 * @property char Nombre
 * @property char Telefono
 * @property char Direccion
 */
class Clientes extends Model
{
    

    public $table = 'clientes';
    

    


    public $fillable = [
        'Nombre',
        'Telefono',
        'Direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nombre' => 'string',
        'Telefono' => 'string',
        'Direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nombre' => 'required'
    ];

    
}
