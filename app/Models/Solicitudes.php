<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'empleadoscontratos';
    protected $primaryKey = 'codigo';
    protected $fillable = ['empleado ', 'nrocontrato ', 'fechacontrato ','inicio','fin',
    'renglon','poliza','honorarios','honorariosmensuales','plazospagos','montocontrato','diasefectivos','diascomision','nombramiento','vavcvl','viaticos','unidad','puesto'
    ,'cargo','estado','firmante','codcorrelativo','conresolucion','partida','fuente','plantilla','oficiosubgerencia','encuesta','razonestado','nombre_gerencia'];
    protected $guarded = ['codigo'];




    public function EMPLEADO()
    {
        return $this->belongsTo('App\Models\Empleado','empleado', 'codigo');
    }



}
