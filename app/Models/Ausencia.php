<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ausencia extends Model
{
    use HasFactory;

    protected $table = 'ausencia';

    protected $primaryKey = 'ausen_id';

    protected $fillable = ['ausen_empleado', 'ausen_inicio', 'ausen_fin','ausen_descripcion'];

    protected $guarded = ['ausen_id'];

}

