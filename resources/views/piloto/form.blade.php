

<div class="form-group row">
    <label for="pil_codigo" class="col-sm-20 col-lg-5 control-label text-sm-left text-lg-right requerido">Código Piloto</label>
    <div class="col-lg-3">
        <input type="text" name="pil_codigo" class="form-control" id="pil_codigo" placeholder="Código Piloto"
            value="{{old('pil_codigo', $data->pil_codigo ?? '')}}"
            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" / required>
    </div>
</div>



<div class="form-group row">
    <label for="pil_nom1" class="col-sm-20 col-lg-5 control-label text-sm-left text-lg-right requerido">Primer Nombre</label>
    <div class="col-lg-3">
        <input type="text" name="pil_nom1" class="form-control" id="pil_nom1" placeholder="Primer Nombre"
            value="{{old('pil_nom1', $data->pil_nom1 ?? '')}}"
           onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>


<div class="form-group row">
    <label for="pil_nom2" class="col-sm-20 col-lg-5 control-label text-sm-left text-lg-right requerido">Segundo Nombre</label>
    <div class="col-lg-3">
        <input type="text" name="pil_nom2" class="form-control" id="pil_nom2" placeholder="Segundo Nombre"
            value="{{old('pil_nom2', $data->pil_nom2 ?? '')}}"
           onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>



<div class="form-group row">
    <label for="pil_ape1" class="col-sm-20 col-lg-5 control-label text-sm-left text-lg-right requerido">Primer Apellido</label>
    <div class="col-lg-3">
        <input type="text" name="pil_ape1" class="form-control" id="pil_ape1" placeholder="Primer Apellido"
            value="{{old('pil_ape1', $data->pil_ape1 ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>


<div class="form-group row">
    <label for="pil_ape2" class="col-sm-20 col-lg-5 control-label text-sm-left text-lg-right requerido">Segundo Apellido</label>
    <div class="col-lg-3">
        <input type="text" name="pil_ape2" class="form-control" id="pil_ape2" placeholder="Segundo Apellido"
            value="{{old('pil_ape2', $data->pil_ape2 ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>

<div class="form-group row">
    <label for="pil_renglon" class="col-sm-20 col-lg-5 control-label text-sm-left text-lg-right requerido">Renglón Piloto</label>
    <div class="col-lg-3">
        <input type="text" name="pil_renglon" class="form-control" id="pil_renglon" placeholder="Renglón Piloto"
            value="{{old('pil_renglon', $data->pil_renglon ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>


<div class="form-group row">
    <label for="pil_dpi" class="col-sm-20 col-lg-5 control-label text-sm-left text-lg-right requerido">DPI</label>
    <div class="col-lg-3">
        <input type="text" name="pil_dpi" class="form-control" id="pil_dpi" placeholder="DPI"
            value="{{old('pil_dpi', $data->pil_dpi ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>


<div class="form-group row">
    <label for="pil_direccion" class="col-sm-20 col-lg-5 control-label text-sm-left text-lg-right requerido">Dirección</label>
    <div class="col-lg-3">
        <input type="text" name="pil_direccion" class="form-control" id="pil_direccion" placeholder="Dirección"
            value="{{old('pil_direccion', $data->pil_direccion ?? '')}}" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
    </div>
</div>





<div class="form-group row">

    <label for="mon_simbolo" class="col-sm-12 col-lg-5 control-label text-sm-left text-lg-right requerido">Guardar Registro</label>
    <div class="col-lg-1">
        <input type="submit" class="form-control"  class="btn btn-success" value="guardar" >
    </div>
</div>
