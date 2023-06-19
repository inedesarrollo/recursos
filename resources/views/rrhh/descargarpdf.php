 


  
<input type="hidden" id="routepath" value="{{url('rrhh')}}">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title">Crear Solicitud<small></small></h3>
                         
                    </div>
                    <form action="{{route('rrhh.pdf')}}" id="form-general" class="form-horizontal" method="POST"
                        autocomplete="off">
                         
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
 
