<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte Por rrhh de Transporte</title>
    <link href="{{public_path('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <h2> Reporte Por rrhh de Transporte</h2>
     
    <table class="table table-striped table-hover" id="tabla-data">
        <thead class='thead-dark'>
            <tr>
                <th>#</th>
                <th>Tarjeta de Circulación </th>
                <th>Tipo rrhh</th>
                <th>Placa</th>
                <th>Marca</th>               
                <th>Numero de Inventario</th>            
                <th>Activo</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{$data->veh_id}}</td>
                <td>{{$data->veh_tarjetacir}}</td>
                <td>{{$data->veh_Tiporrhh}}</td>
                <td>{{$data->veh_placa}}</td>
                <td>{{$data->veh_marca}}</td>                              
                <td>{{$data->veh_Numinventario}}</td>
                         
                <td>
                    @if($data->veh_activo==1)
                        <a>Activo</a>

                    @else
                    <a>Inactivo</a>
                    @endif
                </td> 
                
            </tr>
            @endforeach
        </tbody>
    </table>
    

       

</body>
</html>

