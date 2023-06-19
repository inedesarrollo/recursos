@extends("layouts.app")
@section("titulo")
Rol
@endsection




@section('content')
<input type="hidden" id="routepath" value="{{url('usuario')}}">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Asignar roles a <small>{{$data->name}}</small></h3>
                        <div class="card-tools">
                            <a href="{{route('usuario')}}" class="btn btn-block btn-info btn-sm">
                                Volver a Listado<i class="fas fa-arrow-circle-left pl-1"></i></a>
                        </div>
                    </div>
                    <form action="{{route('usuario.guardarRol')}}" id="form-general" class="form-horizontal" method="POST"
                                    autocomplete="off">
                            <div class="card-body">
                                @csrf
                                <input type="hidden" id="usuario" name="usuario" value="{{$data->id}}">
                                <table class="table table-striped table-hover" id="tabla-data">
                                    <thead class='thead-dark'>
                                        <tr>
                                            <th>Rol</th>
                                            <th class="width70 text-center">Asignar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rolestodos as $rol)
                                        <tr>
                                            <td>{{$rol->name}}</td>
                                            <td align="center">
                                                <div class="icheck-midnightblue d-inline">
                                                <input name="{{$rol->id}}" type="checkbox" class="asignaRoles" id="{{$rol->id}}" {{$data->hasRole($rol->id)?"checked":""}}>
                                                <label for="{{$rol->name}}">
                                                </label>
                                                </div>
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

                                </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
