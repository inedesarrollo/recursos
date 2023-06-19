<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    use HasFactory;
    protected $table = 'vehiculo';
    protected $primaryKey = 'veh_id';
    protected $fillable = ['veh_presponsable', 'veh_tarjetacir', 'veh_Tipovehiculo','veh_linea','veh_chasis',
    'veh_serie','veh_asiento','veh_ejes','veh_color','veh_placa','veh_marca'
    ,'veh_modelo','veh_vin','veh_motor','veh_cilindro','veh_cc','veh_ton','veh_Numinventario', 'veh_activo', 'foto', 'foto2', 'foto3'];
    protected $guarded = ['veh_id'];
}
