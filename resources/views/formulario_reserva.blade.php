<style>
    .faltante{
        border:1px solid #CC0000;
    }
</style>
<div class="modal modal-default fade" id="formulario_reserva" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Formulario de Reserva</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id_reserva" name="id_reserva" />
                <label for="" class="col-lg-3 col-md-12 control-label">R.U.T</label>
                <div class="input-group col-lg-9 col-md-12">
                    <input type="text" id="rut" name="rut" class="form-control requerido" placeholder="Ingrese su R.U.T" onKeyPress="return soloNumerosyK(event)"/>
                    <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                </div><br>
                <label for="" class="col-lg-3 col-md-12 control-label">Primer Nombre</label>
                <div class="input-group col-lg-9 col-md-12">
                    <input type="text" id="nombre1" name="nombre1" class="form-control requerido" placeholder="Ingrese su primer nombre"/>
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                </div><br>
                <label for="" class="col-lg-3 col-md-12 control-label">Segundo Nombre</label>
                <div class="input-group col-lg-9 col-md-12">
                    <input type="text" id="nombre2" name="nombre2" class="form-control" placeholder="Ingrese su segundo nombre"/>
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                </div><br>
                <label for="" class="col-lg-3 col-md-12 control-label">Apellido Paterno</label>
                <div class="input-group col-lg-9 col-md-12">
                    <input type="text" id="apellido1" name="apellido1" class="form-control requerido" placeholder="Ingrese su apellido paterno"/>
                    <span class="input-group-addon"><i class="fa fa-male"></i></span>
                </div><br>
                <label for="" class="col-lg-3 col-md-12 control-label">Apellido Materno</label>
                <div class="input-group col-lg-9 col-md-12">
                    <input type="text" id="apellido2" name="apellido2" class="form-control" placeholder="Ingrese su apellido materno"/>
                    <span class="input-group-addon"><i class="fa fa-female"></i></span>
                </div><br>
                <label for="" class="col-lg-3 col-md-12 control-label">Fecha de Nacimiento</label>
                <div class="input-group col-lg-9 col-md-12">
                    <input type="date" id="fecha_nac" name="fecha_nac" class="form-control requerido"/>
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div><br>
                <label for="" class="col-lg-3 col-md-12 control-label">Correo Electrónico</label>
                <div class="input-group col-lg-9 col-md-12">
                    <input type="text" id="correo" name="correo" class="form-control" onblur="validar_email();"/>
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                </div><br>
                <label for="" class="col-lg-3 col-md-12 control-label">Teléfono</label>
                <div class="input-group col-lg-9 col-md-12">
                    <input type="text" id="telefono" name="telefono" class="form-control" onKeyPress="return soloNumeros(event)"/>
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                </div><br>
                <label for="" class="col-lg-3 col-md-12 control-label">Celular</label>
                <div class="input-group col-lg-9 col-md-12">
                    <input type="text" id="celular" name="celular" class="form-control" onKeyPress="return soloNumeros(event)"/>
                    <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
                </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="cancelar_reservacion();"><span class="fa fa-remove"></span> Cancelar</button>&nbsp;&nbsp;
                <button type="button" class="btn btn-success" onclick="reservar();"><span class="fa fa-save"></span> Reservar</button>
            </div>
        </div>
    </div>
</div>
<script>
    function reservar()
    {
        var error=0;
        $('.requerido').each(function(i, elem) {

            if($(elem).val() == ''){
                $(elem).css({'border':'1px solid #CC0000'});
                error++;
            }
            else
            {
                $(elem).css({'border':''});
            }
        });

        if(error>0)
        {
            swal("Datos Faltantes","Debes ingresar la información de los datos faltantes","info");
        }else{
            var validacion=0;
            var correo=$('#correo').val();
            var telefono=$('#telefono').val();
            var celular=$('#celular').val();
            if(correo=='')
            {
                swal("Atención","Al no ingresar el correo electrónico, no tendrá el beneficio de confirmar la reserva vía email, por lo tanto se le contactará telefónicamente","info");
            }

            if(validacion>0)
            {
                swal("Atención","Debe ingresar su teléfono o celular","info");
            }else{
                alert("guardando");
            }
        }
    }
    function soloNumerosyK(e){
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57 || key==107)
    }
    function soloNumeros(e){
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    }
    function validar_email()
    {
        var email = document.getElementById('correo').value;
        if(email!="") {
            var emailLimpio = email.trim();
            if (emailLimpio != email) {
                $('#correo').focus();
                swal({
                    title: "Formato Incorrecto",
                    text: "El correo no puede tener espacios en blanco ni al principio ni al final",
                    type: "error",
                    confirmButtonText: "Ok"
                });

            } else {

                var patron = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

                var exp = new RegExp(patron);

                if (exp.test(email) == true) {
                }
                else {
                    swal({
                        title: "Correo incorrecto",
                        text: "Ingrese un correo válido",
                        type: "error",
                        confirmButtonText: "Ok"
                    });

                }
            }
        }
    }
    function cancelar_reservacion()
    {
        var id=$('#id_reserva').val();
        $.ajax({
            url: '{{url()}}/update_reservacion',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{id:id,estado:1},
            success:function(data)
            {
                if(data==1){$('#formulario_reserva').modal('hide');}
            }
        });
    }
</script>