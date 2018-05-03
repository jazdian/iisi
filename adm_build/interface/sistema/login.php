<div class="row" style="height: 100%;">

    <div class="col-lg-2 col-sm-12" style="background-color: #003A77;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <div class="col-lg-8 col-sm-12" style="background-color: #4A9EF8;">

        <div class="container" style="height: 100%;">

            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">

                <div class="card text-white bg-primary mb-3" style="max-width: 38rem;">

                    <div class="card-header ">ISSI</div>
                    <div class="card-body ">

                        <h5 class="card-title ">Ingresa tu usuario y contraseña</h5>

                        <form method="POST">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Usuario</label>
                                <input name="user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-light"> 
                                 Nunca compartas tu contraseña con alguien.
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña</label>
                                <input name="passw" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                           <hr>
                            <button type="submit" class="btn btn-danger">Entrar al sistema</button>

                        </form>                        

                    </div>
                    
                    <?php if($_SESSION['firs_time'] === false): ?>
                    
                    <div class="alert alert-danger">Su usuario o contraseña no son correctos</div>
                    
                    <?php endif; ?>
                    
                </div>
               
            </div>

        </div>

    </div>

    <div class="col-lg-2 col-sm-12 " style="background-color: #4A9EF8; ">

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    </div>
   
</div>