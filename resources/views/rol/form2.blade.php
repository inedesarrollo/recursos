<form action="" method="post" enctype="multipart/form-data">
<div class="form-group row">
    <label for="name" class="col-sm-20 col-lg-5 control-label text-sm-left text-lg-right requerido">Nombre del Rol</label>
    <div class="col-lg-3">
        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre"
            value="{{old('name', $data->name ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>

<div class="form-group row">
    <label for="mon_simbolo" class="col-sm-12 col-lg-5 control-label text-sm-left text-lg-right ">Guardar Registro</label>
    <div class="col-lg-1">
        <input type="submit" class="form-control"  class="btn btn-success" value="guardar" >
    </div>
</div>

</form>

