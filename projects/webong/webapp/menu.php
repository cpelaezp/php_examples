<?php
    include 'app.start.php';

?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h3>Sistema de Información</h3>
      <h5><?php echo $message ?></h5>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <?php if ($inSession <> ''){ ?>
    <ul class="list-unstyled components">
      <li class="active">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Productividad</a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
          <li> <a href="#">Proyectos</a> </li>
               <li>
                    <a href="#">Presupuesto</a>
                </li>
                <li>
                    <a href="#">Actuaciones</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Paramentros</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Personas</a>
                </li>
                <li>
                    <a href="#">Poblaciones</a>
                </li>
                <li>
                    <a href="#">Sedes</a>
                </li>
                <li>
                    <a href="#">Ciudades</a>
                </li>
                <li>
                    <a href="#">Paises</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Ayuda</a>
        </li>
    </ul>
    <?php } else { ?>
        <div class="container">
            <h1 class="form-heading">login Form</h1>
            <div class="login-form">
                <div class="main-div">
                    <div class="panel">
                        <h2>Admin Login</h2>
                        <p>Please enter your email and password</p>
                    </div>
                    <form id="Login">
                        <div class="form-group">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                        <div class="forgot">
                            <a href="reset.html">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <p class="botto-text"> Designed by Sunil Rajput</p>
            </div>
        </div>
    <?php } ?>
    </div>
  </div>
</div>


