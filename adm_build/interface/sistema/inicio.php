
<br>

<div class="container bg-light">

   <h2>Menu Principal</h2>

   <hr>

   <div id="MenuPrincipal" style="display: block;">

      <div class="d-flex justify-content-center align-items-center">

         <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="http://lorempixel.com/280/180/" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Consulta de mantenimientos</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <button type="button" class="btn btn-warning" onclick="MostrarMenuOpciones();">Ver mas opciones</button>
            </div>
         </div>

         <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="http://lorempixel.com/280/180/" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Agregar un nuevo mantenimiento</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <button type="button" class="btn btn-success" onclick="MostrarAddMantenimiento();">Agregar mantenimiento</button>
            </div>
         </div>

      </div>

   </div>


   <div id="MenuMasOpciones" style="display: none;">

      <button type="button" class="btn btn-primary" onclick="MostrarMenu();">Regresar</button>
      <br><hr>
      <div class="justify-content-center row">

         <div class="card text-white bg-warning mb-3" style="max-width: 18rem; margin: 10px">
            <div class="card-header">Sección</div>
            <div class="card-body">
               <h5 class="card-title">Luminarias</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <button type="button" class="btn btn-link">Ver edificios</button>
            </div>
         </div>

         <div class="card text-white bg-danger mb-3" style="max-width: 18rem; margin: 10px">
            <div class="card-header">Sección</div>
            <div class="card-body">
               <h5 class="card-title">Equipo contra incendio</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <button type="button" class="btn btn-link text-light">Ver edificios</button>
            </div>
         </div>

         <div class="card text-white bg-primary mb-3" style="max-width: 18rem; margin: 10px">
            <div class="card-header">Agua potable</div>
            <div class="card-body">
               <h5 class="card-title">Success card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
         </div>          

         <div class="card text-white bg-info mb-3" style="max-width: 18rem; margin: 10px">
            <div class="card-header">Cisternas</div>
            <div class="card-body">
               <h5 class="card-title">Dark card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
         </div>              

         <div class="card text-white bg-primary mb-3" style="max-width: 18rem; margin: 10px">
            <div class="card-header">Alberecas</div>
            <div class="card-body">
               <h5 class="card-title">Danger card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
         </div>

         <div class="card bg-light mb-3" style="max-width: 18rem; margin: 10px">
            <div class="card-header">Cárcamos</div>
            <div class="card-body">
               <h5 class="card-title">Warning card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
         </div>

         <div class="card text-white bg-dark mb-3" style="max-width: 18rem; margin: 10px">
            <div class="card-header">Planta de tratamiento</div>
            <div class="card-body">
               <h5 class="card-title">Info card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
         </div>

         <div class="card bg-success mb-3" style="max-width: 18rem; margin: 10px">
            <div class="card-header">Extractores</div>
            <div class="card-body">
               <h5 class="card-title">Light card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
         </div>

         <div class="card text-white bg-danger mb-3" style="max-width: 18rem; margin: 10px">
            <div class="card-header">Pararayos</div>
            <div class="card-body">
               <h5 class="card-title">Dark card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
         </div>       

         <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; margin: 10px">
            <div class="card-header">Valvula reguladora</div>
            <div class="card-body">
               <h5 class="card-title">Warning card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
         </div>            


      </div>


   </div>

   <div id="MenuAddMantenimiento" style="display: none;">

      <button type="button" class="btn btn-success" onclick="MostrarMenu();">Menu Principal</button>
      <br><hr>
      
      <div class="justify-content-center row">
         <form method="POST">
            <input type="hidden" name="add_buildind" value="mantenimiento">
            <div class="list-group">
               <button type="submit" class="list-group-item list-group-item-action list-group-item-warning">
                  Luminarias
               </button>
               <button type="submit" class="list-group-item list-group-item-action list-group-item-danger">Equipo contra incendio</button>
               <button type="submit" class="list-group-item list-group-item-action list-group-item-primary">Agua Potable</button>
               <button type="submit" class="list-group-item list-group-item-action list-group-item-light">Cárcamos</button>
               <button type="submit" class="list-group-item list-group-item-action list-group-item-dark">Planta de tratamiento</button>
               <button type="submit" class="list-group-item list-group-item-action list-group-item-primary">Albercas</button>
               <button type="submit" class="list-group-item list-group-item-action list-group-item-success">Extractores</button>
               <button type="submit" class="list-group-item list-group-item-action list-group-item-danger">Pararayos</button>
               <button type="submit" class="list-group-item list-group-item-action list-group-item-info">Cisternas</button>
               <button type="submit" class="list-group-item list-group-item-action list-group-item-secondary">Valvula reguladora</button>
            </div>        
            
         </form>
      </div>      

      <br>

   </div>

</div>

