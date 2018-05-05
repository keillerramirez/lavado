<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Tipo_lavados
 * @package App\Models
 * @version May 1, 2018, 10:33 pm UTC
 *
 * @property char Descripcion
 */
class Tipo_lavados extends Model
{
    

    public $table = 'tipo_lavados';
    

    


    public $fillable = [
        'Descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Descripcion' => 'required'
    ];

    
}
