<?php
    include 'app.start.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        session_uptvar('insession', 'ONLINE');
        echo "asdsad";
    }

    $inSession = session_getvar('insession');
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
<?php if ($inSession == 'ONLINE'){ ?>
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
                    </div>
                    <form id="Login" action="menu.php" method="post">
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
            </div>
        </div>
<?php } ?>
    </div>
  </div>
</div>


