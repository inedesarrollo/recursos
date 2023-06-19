<?php

use App\Models\Atencion\Ticket;
use App\Models\Contabilidad\DetPoliza;
use App\Models\Contabilidad\Poliza;
use App\Models\Seguridad\Usuario;
use Illuminate\Support\Facades\DB;

if (! function_exists('Alertas')) {
    function Alertas()
    {
        $Contador=0;
        $Usuario = new Usuario();

        if($Usuario->SearchRol(auth()->user()->id,'Equipo de Desarrollo'))
        {
            $Tickets = new Ticket();
            $Tickets=$Tickets->where('tck_status',1)->get();
            $Contador=$Contador+count($Tickets);
        }

        if($Usuario->SearchRol(auth()->user()->id,'Autorizador'))
        {
            $Tickets = new Ticket();
            $Tickets=$Tickets->where('tck_status',3)->get();
            $Contador=$Contador+count($Tickets);
        }

        if($Contador==0) return '';
        else return $Contador;
    }
}
