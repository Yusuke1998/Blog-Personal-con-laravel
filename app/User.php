<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";

    protected $fillable = [
        'name', 'email', 'password','type',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles()
    {

        return $this->hasMany('App\Article');
    }

    // Inicio de Acesores
        // Un acesor lo que hace es realizar una cambio a un campo que venga de una tabla, pero este solo lo hace una vez que el campo es llamado a la vista, no modifica la base de datos como los matadores, un acesor se crea creando una funcion donde se escribe "get", el nombre de la columna con la primera letra en mayuscula y luego la parabra "Attributes" , este retorna el valor recibido ya modificado.

    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

    public function getEmailAttribute($value)
    {
        return strtoupper($value);
    }
    // Fin de Acesores

    // Inicio de Mutadores
        // Un mutador permite hacer cambios/o definir cambios a una columna completa de la tabla del modelo en el que este, un mutador se crea con una funcion donde siempre se coloca la palabra "set" luego el nombre del campo a modificar y luego la palabra "Attributes", y esta funcion recibe siempre una parametro.
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    // Fin de Mutadores



}
