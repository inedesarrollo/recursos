@extends("layouts.app")
@section("titulo")
Rol
@endsection




@section('content')
<input type="hidden" id="routepath" value="{{url('rol')}}">
<section class="content">
    <div class="card card-outline card-success">
        <div class="card-header">
            <h3 class="card-title">Asignar Permisos al Rol <big>
            <div class="card-tools">
                <a href="{{route('rol')}}" class="btn btn-block btn-info btn-sm">
                    Volver a Listado<i class="fas fa-arrow-circle-left pl-1"></i></a>
            </div>
        </div>
        <form action="{{route('rol.guardarPermisos')}}" id="form-general" class="form-horizontal" method="POST"
            autocomplete="off">
            <div class="card-body">
                @csrf


                <table class="table table-striped table-hover" id="tabla">
                    <thead class='thead-dark'>
                        <tr>
                            <th rowspan="2" class="text-center align-middle">Nombre</th>
                            <th colspan="4" class="text-center">Permisos</th>
                        </tr>
                        <tr>
                            <th class="text-center">Asignar</th>

                        </tr>
                    </thead>

                    <tbody>
                        <input type="hidden" name='rol' id='rol' value="{{$data3->name}}">
                        @foreach ( $data2->get() as $permiso )

                        <tr>
                            <td>
                                {{$permiso->name}}
                            </td>
                            <td>
                                <input type="checkbox" name='{{$permiso->id}}' id='{{$permiso->id}}'
                                @if (in_array($permiso->toArray(),$data->toArray()))
                                checked='checked'
                                @endif
                                >
                            </td>

                        </tr>

                        @endforeach

                        <div class="form-group row">
                            <label for="mon_simbolo" class="col-sm-12 col-lg-5 control-label text-sm-left text-lg-right ">Guardar Registro</label>
                            <div class="col-lg-1">
                                <input type="submit" class="form-control"  class="btn btn-success" value="guardar" >
                            </div>
                        </div>
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </form>
    </div>
</section>
