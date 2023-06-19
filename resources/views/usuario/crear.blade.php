@extends("layouts.app")
@section("titulo")
Usuario
@endsection



@section('content')
<input type="hidden" id="routepath" value="{{url('usuario')}}">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title">Crear Usuario<small></small></h3>
                        <div class="card-tools">
                            <a href="{{route('usuario')}}" class="btn btn-block btn-info btn-sm">
                                Volver a Listado<i class="fas fa-arrow-circle-left pl-1"></i></a>
                        </div>
                    </div>
                    <form action="{{route('usuario.guardar')}}" id="form-general" class="form-horizontal" method="POST"
                        autocomplete="off">
                        <div class="card-body">
                            @csrf
                            @include('usuario.form')
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-4"></div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
