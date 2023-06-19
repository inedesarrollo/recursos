<form action="" method="post" enctype="multipart/form-data">
<div class="form-group row">
    <label for="nombres" class="col-sm-20 col-lg-5 control-label text-sm-left text-lg-right requerido">Nombre</label>
    <div class="col-lg-3">
        <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Nombre"
            value="{{old('nombres', $data->nombres ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>



<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="apellidos" class="col-sm-20 col-lg-5 control-label text-sm-left text-lg-right requerido">Apellidos</label>
        <div class="col-lg-3">
            <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Nombre"
                value="{{old('apellidos', $data->apellidos ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
        </div>
    </div>



<div class="form-group row">
    <label for="cargo" class="col-sm-12 col-lg-5 control-label text-sm-left text-lg-right requerido">Cargo</label>
    <div class="col-lg-3">
        <input type="text" name="cargo" class="form-control" id="cargo" placeholder="Cargo"
            value="{{old('cargo', $data->cargo ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>


<div class="form-group row">
    <label for="departamento" class="col-sm-12 col-lg-5 control-label text-sm-left text-lg-right requerido">Departamento</label>
    <div class="col-lg-3">
        <input type="text" name="departamento" class="form-control" id="departamento" placeholder="Departamento"
            value="{{old('departamento', $data->departamento ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>


<div class="form-group row">
    <label for="horasext_necesarias" class="col-sm-12 col-lg-5 control-label text-sm-left text-lg-right requerido">Horas Extra Necesarias</label>
    <div class="col-lg-3">
        <input type="text" name="horasext_necesarias" class="form-control" id="horasext_necesarias" placeholder="Horas Extras Necesarias"
            value="{{old('horasext_necesarias', $data->horasext_necesarias ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>


<div class="form-group row">
    <label for="detalle_razonhorasext" class="col-sm-12 col-lg-5 control-label text-sm-left text-lg-right requerido">Detalle o Razón de Horas Extras</label>
    <div class="col-lg-3">
        <input type="text" name="detalle_razonhorasext" class="form-control" id="detalle_razonhorasext" placeholder="Detalle o Razón de Horas Extras"
            value="{{old('detalle_razonhorasext', $data->detalle_razonhorasext ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>




<div class="form-group row">
    <label for="Hora_entrada" class="col-sm-12 col-lg-5 control-label text-sm-left text-lg-right requerido">Hora Entrada</label>
    <div class="col-lg-3">
        <input type="text" name="Hora_entrada" class="form-control" id="Hora_entrada" placeholder="Hora Entrada"
            value="{{old('Hora_entrada', $data->Hora_entrada ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>



<div class="form-group row">
    <label for="Hora_salida" class="col-sm-12 col-lg-5 control-label text-sm-left text-lg-right requerido">Hora Salida</label>
    <div class="col-lg-3">
        <input type="text" name="Hora_salida" class="form-control" id="Hora_salida" placeholder="Hora Salida"
            value="{{old('Hora_salida', $data->Hora_salida ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>










    <div class="form-group row">
        <label for="fecha" class="col-sm-12 col-lg-5 control-label text-sm-left text-lg-right requerido">Fecha</label>
        <div class="col-lg-3">
            <input type="text" name="fecha" class="form-control" id="fecha" placeholder="Fecha"
                value="{{old('fecha', $data->fecha ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
        </div>
    </div>



    <div class="form-group row">
        <label for="mon_simbolo" class="col-sm-12 col-lg-5 control-label text-sm-left text-lg-right "> Formulario para Solicitud de Hora Extra</label>
        <div class="col-lg-1">
            <a href="">
                <A HREF="https://forms.office.com/r/BLNCeaETaH">
                    Formulario para Solicitud de Hora Extra</A>

              </a>
    </div>








<div class="form-group row">
    <label for="mon_simbolo" class="col-sm-12 col-lg-5 control-label text-sm-left text-lg-right ">Guardar Registro</label>
    <div class="col-lg-1">
        <input type="submit" class="form-control"  class="btn btn-success" value="guardar" >
    </div>
</div>

</form>

