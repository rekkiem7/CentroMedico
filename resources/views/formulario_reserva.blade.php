<div class="modal modal-default fade" id="formulario_reserva" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Formulario de Reserva</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id_reserva" name="id_reserva" />
                <label for="" class="col-lg-12 col-md-12 control-label">R.U.T</label>
                <div class="input-group col-lg-8 col-md-12">
                    <input type="text" id="rut" name="rut" class="form-control" placeholder="Ingrese su R.U.T"/>
                    <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-right" onclick="cancelar_reservacion();"><span class="fa fa-remove"></span> Cancelar</button>
            </div>
        </div>
    </div>
</div>
<script>
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