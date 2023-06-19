<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'empleados';
    protected $primaryKey = 'codigo';
    protected $fillable = ['titulo', 'nombres', 'apellidos','direccion','departamento',
    'municipio','identificacion','identificacionnro','telefono','celular','fechanacimiento','unidad','puesto','unidadfuncional','puestofuncional',
    'correo','estadocivil','sexo','informacion','nit','usuariosistema','regimensat'
    ,'tiposervicio','profesion','banco','cuentabancaria','direccionfiscal','renglon','clave','nacionalidad'];
    protected $guarded = ['codigo'];



    public function EMPLEADO()
    {
        return $this->belongsTo('App\Models\Solicitudes','codigo', 'empleado');
    }


 
}
