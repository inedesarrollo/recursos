<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class piloto extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'piloto';
    protected $primaryKey = 'pil_id';
    protected $fillable = ['pil_codigo', 'pil_nom1', 'pil_nom2','pil_ape1','pil_ape2',
    'pil_renglon','pil_dpi','pil_direccion'];
    protected $guarded = ['pil_id'];


}
