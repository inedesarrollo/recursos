@extends("layouts.app")
@section("titulo")
rrhh
@endsection

 
 

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet" >
<link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
@endsection


 
@section('content')
<input type="hidden" id="routepath" value="{{url('rrhh')}}">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">CONTRATOS <small></small></h3>
                            <div class="card-tools"> </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover" id="tabla-data">
                                <thead class='thead-dark'>
                                    <tr>
                                            <th>Código Empleado</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>DPI</th>
                                            <th>NIT</th>                               
                                            <th class="width80">Ver</th>
                                            <th>Reporte PDF</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                    <tr>
                                        <td>{{$data->codigo}}</td>
                                        <td>{{$data->nombres}}</td>
                                        <td>{{$data->apellidos}}</td>
                                        <td>{{$data->identificacionnro}}</td>
                                        <td>{{$data->nit}}</td>
                                        
                                        <td>
                                            <a href="{{route('rrhh.mostrar',['id'=> $data->codigo])}}"
                                                class="btn-accion-tabla mr-4" data-toggle="tooltip"
                                                title="VER">
                                                <button  href="{{route('rrhh.mostrar',['id'=> $data->codigo])}}" type="button" class="btn btn-primary">Ver</button></a>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('rrhh.pdf',['id'=> $data->codigo])}}"
                                                class="btn-accion-tabla mr-4" data-toggle="tooltip"
                                                title="VER">
                                                <button  href="{{route('rrhh.pdf',['id'=> $data->codigo])}}" type="button" class="btn btn-secondary">Descargar</button></a>
                                            </a>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                             <!-- /.card-body -->
                        <div class="card-footer">

                        </div>
                </div>
            </div>
        </div>
    </div>

    
          

</section>
 
@endsection



            @section("js")
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
           

    <script>
            $(document).ready(function () {
            $('#tabla-data').DataTable();
        });
    </script>

@endsection


