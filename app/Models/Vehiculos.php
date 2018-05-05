<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Vehiculos
 * @package App\Models
 * @version May 1, 2018, 9:54 pm UTC
 *
 * @property integer Clientes_id
 * @property char Placa
 */
class Vehiculos extends Model
{
    

    public $table = 'vehiculos';
    

    


    public $fillable = [
        'Clientes_id',
        'Placa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Clientes_id' => 'integer',
        'Placa' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Clientes_id' => 'required',
        'Placa' => 'required'
    ];

    
}
