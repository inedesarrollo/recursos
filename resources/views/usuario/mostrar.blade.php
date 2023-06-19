@extends("layouts.app")
@section("titulo")
Rol
@endsection



@section('content')
<input type="hidden" id="routepath" value="{{url('rol')}}">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Mostrar Rol:{{$data->id}}<small></small></h3>
                        <div class="card-tools">
                            <a href="{{route('rol')}}" class="btn btn-block btn-info btn-sm">
                                Volver a Listado<i class="fas fa-arrow-circle-left pl-1"></i></a>





                        </div>
                    </div>
                    <div class="card-body row">
                        <div class="col-lg-8">

                            <table class="table" style="width:100%">
                                <table style="width:100%">
                                    <tr>
                                        <th># </th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nombre Rol </th>
                                        <td> {{$data->name}}</td>
                                    </tr>






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
