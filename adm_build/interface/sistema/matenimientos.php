<br>

<div class="container bg-light">

   <h2>Gestion de mantenimiento</h2>

   <hr>

   <div class="d-flex justify-content-center align-items-center">

      <?php echo $dte; ?>

   </div>

</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="ModalAddService" tabindex="-1" role="dialog" aria-labelledby="ModalAddServiceLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalAddServiceLabel">Checklist de Luminarias: (Nombre del Supervisor)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>

          <div class="form-group">
            <label for="PersonalMantenimiento">Selecciona el area.</label>
            <select class="form-control mb-2" id="exampleFormControlSelect1">
              <option>Selecciona área</option>
              <option>Piso 1</option>
              <option>Piso 3</option>
              <option>Piso 4</option>
              <option>Bódega</option>
              <option>Sótano</option>
            </select>
          </div>  

          <hr>

          <div class="row">
            <div class="form-group colsm-12 col-md-6">
              <label for="HoraEntrada">Hora Entrada</label>
              <input type="text" class="form-control" id="HoraEntrada" name="HoraEntrada">
            </div>
            <div class="form-group colsm-12 col-md-6">
              <label for="HoraSalida">Hora Salida</label>
              <input type="text" class="form-control" id="HoraSalida" name="HoraSalida">
            </div>
          </div>

          <div class="form-group">
            <label for="PersonalMantenimiento">Personal de mantenimiento</label>
            <input type="text" class="form-control" id="PersonalMantenimiento" name="PersonalMantenimiento">
          </div>          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Limpieza de área</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Uniforme</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox3">Herramienta</label>
          </div>
          
          <hr>       


        <div class="row">
          <div class="form-group colsm-12 col-md-4">
            <label for="PersonalMantenimiento">1. Equipo de bombeo potable</label>
            <select class="form-control mb-2" id="exampleFormControlSelect1">
              <option>Selecciona un tipo</option>
              <option>Tipo 2</option>
              <option>Tipo 3</option>
              <option>Tipo 4</option>
            </select>
          </div>

          <div class="form-group colsm-12 col-md-3">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Cantidad">         
          </div>

          <div class="form-group colsm-12 col-md-5">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Especificaciones">          
          </div>

        </div>  


        <div class="row">
          <div class="form-group colsm-12 col-md-4">
            <label for="PersonalMantenimiento">2. Planta de Emergencia</label>
            <select class="form-control mb-2" id="exampleFormControlSelect1">
              <option>Selecciona un tipo</option>
              <option>Tipo 2</option>
              <option>Tipo 3</option>
              <option>Tipo 4</option>
            </select>
          </div>

          <div class="form-group colsm-12 col-md-3">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Cantidad">         
          </div>

          <div class="form-group colsm-12 col-md-5">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Especificaciones">          
          </div>

        </div>

        <div class="row">
          <div class="form-group colsm-12 col-md-4">
            <label for="PersonalMantenimiento">3. Sistema contra incendio</label>
            <select class="form-control mb-2" id="exampleFormControlSelect1">
              <option>Selecciona un tipo</option>
              <option>Tipo 2</option>
              <option>Tipo 3</option>
              <option>Tipo 4</option>
            </select>
          </div>

          <div class="form-group colsm-12 col-md-3">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Cantidad">         
          </div>

          <div class="form-group colsm-12 col-md-5">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Especificaciones">          
          </div>

        </div>

        <div class="row">
          <div class="form-group colsm-12 col-md-4">
            <label for="PersonalMantenimiento">4. Sistema de alberca y jacuzzi</label>
            <select class="form-control mb-2" id="exampleFormControlSelect1">
              <option>Selecciona un tipo</option>
              <option>Tipo 2</option>
              <option>Tipo 3</option>
              <option>Tipo 4</option>
            </select>
          </div>

          <div class="form-group colsm-12 col-md-3">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Cantidad">         
          </div>

          <div class="form-group colsm-12 col-md-5">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Especificaciones">          
          </div>

        </div>

        <div class="row">
          <div class="form-group colsm-12 col-md-4">
            <label for="PersonalMantenimiento">4.1 Caldera, alberca</label>
            <select class="form-control mb-2" id="exampleFormControlSelect1">
              <option>Selecciona un tipo</option>
              <option>Tipo 2</option>
              <option>Tipo 3</option>
              <option>Tipo 4</option>
            </select>
          </div>

          <div class="form-group colsm-12 col-md-3">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Cantidad">         
          </div>

          <div class="form-group colsm-12 col-md-5">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Especificaciones">          
          </div>

        </div>

        <div class="row">
          <div class="form-group colsm-12 col-md-4">
            <label for="PersonalMantenimiento">4.2 Bombas, alberca</label>
            <select class="form-control mb-2" id="exampleFormControlSelect1">
              <option>Selecciona un tipo</option>
              <option>Tipo 2</option>
              <option>Tipo 3</option>
              <option>Tipo 4</option>
            </select>
          </div>

          <div class="form-group colsm-12 col-md-3">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Cantidad">         
          </div>

          <div class="form-group colsm-12 col-md-5">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Especificaciones">          
          </div>

        </div>

        <div class="row">
          <div class="form-group colsm-12 col-md-4">
            <label for="PersonalMantenimiento">4.3 Filtro, alberca</label>
            <select class="form-control mb-2" id="exampleFormControlSelect1">
              <option>Selecciona un tipo</option>
              <option>Tipo 2</option>
              <option>Tipo 3</option>
              <option>Tipo 4</option>
            </select>
          </div>

          <div class="form-group colsm-12 col-md-3">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Cantidad">         
          </div>

          <div class="form-group colsm-12 col-md-5">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Especificaciones">          
          </div>

        </div>

        <div class="row">
          <div class="form-group colsm-12 col-md-4">
            <label for="PersonalMantenimiento">5. Cárcamo</label>
            <select class="form-control mb-2" id="exampleFormControlSelect1">
              <option>Selecciona un tipo</option>
              <option>Tipo 2</option>
              <option>Tipo 3</option>
              <option>Tipo 4</option>
            </select>
          </div>

          <div class="form-group colsm-12 col-md-3">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Cantidad">         
          </div>

          <div class="form-group colsm-12 col-md-5">
             <label for="">&nbsp;&nbsp;&nbsp;</label>
             <input type="text" class="form-control  mb-2" id="PersonalMantenimiento" name="PersonalMantenimiento" placeholder="Especificaciones">          
          </div>

        </div>


        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="GuardarFormato();">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>

<script>

function SelectRow(valor)
{
    console.log(valor);
}

function GuardarFormato()
{


  swal({
    type: 'success',
    title:'Se han guardado los datos correctamente!',
    showConfirmButton: false,
    timer: 3000
  }).then((result)=>{
    $('#ModalAddService').modal('hide');
  });

 
}
</script>
