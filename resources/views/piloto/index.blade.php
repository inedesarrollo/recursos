@extends("layouts.app")
@section("titulo")
piloto
@endsection


@if ($datas->count()>12)
@endif



@section('content')
<input type="hidden" id="routepath" value="{{url('piloto')}}">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Piloto<small></small></h3>
                        <div class="card-tools">

                            <a href="{{route('piloto.crear')}}" class="btn btn-block btn-success btn-sm">
                                Nuevo registro<i class="fa fa-fw fa-plus-circle pl-1"></i></a>

                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover" id="tabla-data">
                            <thead class='thead-dark'>
                                <tr>
                                    <th>#</th>
                                    <th>Código</th>
                                    <th>Códdigo</th>
                                    <th>Nombre Piloto</th>



                                    <th class="width70">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                <tr>
                                    <td>{{$data->pil_id}}</td>
                                    <td>{{$data->pil_codigo}}</td>
                                    <td>{{$data->pil_dpi}}</td>
                                    <td>{{$data->pil_nom1}}-{{$data->pil_nom2}}-{{$data->pil_ape1}}-{{$data->pil_ape2}}</td>

                                    <td>

                                        <a href="{{route('piloto.editar',['id'=> $data->pil_id])}}"
                                            class="btn-accion-tabla mr-4" data-toggle="tooltip"
                                            title="Editar este registro">
                                            <i class="far fa-edit"></i></a>

                                        <a href="{{route('piloto.eliminar',['id'=> $data->pil_id])}}"
                                            class="btn-accion-tabla eliminar-registro" data-toggle="tooltip"
                                            title="Eliminar este registro">
                                            <i class="text-danger far fa-trash-alt"></i></a>


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
