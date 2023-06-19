@extends("layouts.app")
@section("titulo")
Usuarios
@endsection


@if ($datas->count()>12)
@endif



@section('content')
<input type="hidden" id="routepath" value="{{url('usuario')}}">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">usuario <small></small></h3>
                        <div class="card-tools">

                            <a href="{{route('usuario.crear')}}" class="btn btn-block btn-success btn-sm">
                                Nuevo registro<i class="fa fa-fw fa-plus-circle pl-1"></i></a>

&nbsp;





                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover" id="tabla-data">
                            <thead class='thead-dark'>
                                <tr>
                                    <th>#</th>
                                    <th> Nombre</th>
                                    <th> Correo</th>


                                    <th class="width70">Acciones</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>


                                        <a href="{{route('usuario.mostrar',['id'=> $data->id])}}"
                                            class="btn-accion-tabla mr-4" data-toggle="tooltip"
                                            title="Editar este registro">
                                            <button  href="{{route('usuario.mostrar',['id'=> $data->id])}}" type="button" class="btn btn-primary">Ver</button></a>

                                        </a>



                                    <a href="{{route('usuario.editar',['id'=> $data->id])}}"
                                        class="btn-accion-tabla mr-4" data-toggle="tooltip"
                                        title="editar">

                                        <button  href="{{route('usuario.editar',['id'=> $data->id])}}" type="button" class="btn btn-primary">Editar</button></a>
                                       </a>




                                    <a href="{{route('usuario.eliminar',['id'=> $data->id])}}"
                                        class="btn-accion-tabla mr-4" data-toggle="tooltip"
                                        title="editar">

                                        <button  href="{{route('usuario.editar',['id'=> $data->id])}}" type="button" class="btn btn-primary">Eliminar</button></a>
                                       </a>



                                       <a href="{{route('usuario.asignarRol',['id'=> $data->id])}}"
                                        class="btn-accion-tabla mr-4" data-toggle="tooltip"
                                        title="editar">

                                        <button  href="{{route('usuario.asignarRol',['id'=> $data->id])}}" type="button" class="btn btn-primary">Asignar Permisos</button></a>
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
