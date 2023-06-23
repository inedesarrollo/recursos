@extends("layouts.app")
@section("titulo")
Vehículo
@endsection

 

<style>
    .left-div {
        float: left;
        /* Agrega estilos adicionales según tus necesidades */
    }

    .derecha {
        float: right;
        /* Agrega estilos adicionales según tus necesidades */
    }
</style>

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/table.js")}}" type="text/javascript"></script>
@endsection

@section('content')
<input type="hidden" id="routepath" value="{{url('rrhh')}}">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Mostrar Empleado:{{$data->nombres}}<small></small></h3>
                        <div class="card-tools left-div">
                            <a href="{{route('rrhh')}}" class="btn btn-block btn-info btn-sm">
                                Volver a Listado<i class="fas fa-arrow-circle-left pl-1"></i></a>      
                        </div>

                        <div class="card-tools derecha">
                            <a href="{{route('rrhh.pdf',['id'=> $data->codigo])}}" class="btn btn-danger">
                                Reporte de Contratos en PDF<i class="btn btn-danger"></i></a>

                        </div>

                       <!-- <div class="card-tools derecha">
                            <a href="{{route('rrhh.word',['id'=> $data->codigo])}}" class="btn btn-danger">
                                Reporte de Contratos en WORD<i class="btn btn-danger"></i></a> -->

                        </div>
                    </div>
                    <div class="card-body row">
                        <div class="col-lg-8">

                            <table class="table" style="width:100%">
                                <table style="width:100%">

                                    @foreach ($data1 as $datas)
                          
                                    
                                        <tr>
                                            <th>------------------</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>No. Contrato </th>
                                            <td>{{$datas->nrocontrato}}</td>
                                        </tr>
                                        <tr>
                                            <th>Fecha Inicio </th>
                                            <td>{{\Carbon\Carbon::parse($datas->inicio)->format('d/m/Y')}}</td>
                                        </tr>

                                        <tr>
                                            <th>Fecha Final</th>
                                            <td>{{\Carbon\Carbon::parse($datas->fin)->format('d/m/Y')}}</td>
                                        </tr>
                                        <tr>
                                            <th>Monto Contrato</th>
                                            <td> Q. {{$datas->honorarios}}</td>
                                        </tr>

                                        <tr>
                                            <th>------------------</th>
                                            
                                        </tr>
                                    @endforeach
                                </table>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
@endsection
