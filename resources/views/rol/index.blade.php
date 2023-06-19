@extends("layouts.app")
@section("titulo")
ROLES
@endsection


@if ($datas->count()>12)
@endif



@section('content')
<input type="hidden" id="routepath" value="{{url('rol')}}">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">ROLES <small></small></h3>
                        <div class="card-tools">

                            <a href="{{route('rol.crear')}}" class="btn btn-block btn-success btn-sm">
                                Nuevo registro<i class="fa fa-fw fa-plus-circle pl-1"></i></a>

&nbsp;





                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover" id="tabla-data">
                            <thead class='thead-dark'>
                                <tr>
                                    <th>#</th>
                                    <th> Rol Nombre</th>

                                    <th class="width70">Acciones</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>


                                        <a href="{{route('rol.mostrar',['id'=> $data->id])}}"
                                            class="btn-accion-tabla mr-4" data-toggle="tooltip"
                                            title="Editar este registro">
                                            <button  href="{{route('rol.mostrar',['id'=> $data->id])}}" type="button" class="btn btn-primary">Ver</button></a>

                                        </a>



                                    <a href="{{route('rol.editar',['id'=> $data->id])}}"
                                        class="btn-accion-tabla mr-4" data-toggle="tooltip"
                                        title="editar">

                                        <button  href="{{route('rol.editar',['id'=> $data->id])}}" type="button" class="btn btn-primary">Editar</button></a>
                                       </a>




                                    <a href="{{route('rol.eliminar',['id'=> $data->id])}}"
                                        class="btn-accion-tabla mr-4" data-toggle="tooltip"
                                        title="editar">

                                        <button  href="{{route('rol.editar',['id'=> $data->id])}}" type="button" class="btn btn-primary">Eliminar</button></a>
                                       </a>



                                       <a href="{{route('rol.asignarPermisos',['id'=> $data->id])}}"
                                        class="btn-accion-tabla mr-4" data-toggle="tooltip"
                                        title="editar">

                                        <button  href="{{route('rol.asignarPermisos',['id'=> $data->id])}}" type="button" class="btn btn-primary">Asignar Permisos</button></a>
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
