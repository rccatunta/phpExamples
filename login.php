<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>ProgramEd</title>

</head>
<body>
	<div class="container-fluid">
		<nav id="nave" class="navbar navbar-expand-lg navbar-dark bg-dark">
  			<a class="navbar-brand" href="#">
  				Restaurant Martita
  			</a>
			<div class="collapse navbar-collapse" id="navbarNav">
		    	<ul class="navbar-nav ml-auto">
		      		<li class="nav-item active">
		        		<a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="temas.php">Menus del día</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="cursos.php">Cotizacion y Reporte de Pedidos</a>
		      		</li>
              <li class="nav-item">
              <?php
                if(isset($_SESSION['user'])){
                  echo '<a class="nav-link" href="logout.php">Cerrar Sesion</a>';
                }
                else{
                  echo '<a class="nav-link" href="login.php">Iniciar Sesion</a>';
                }
              ?>                
              </li>
		    	</ul>
			</div>
		</nav>
	</div>
	
	<!-- Main -->
	<main id="main" class="col-4 offset-4">
    
    
      <?php
      if(isset($errorLogin)){
        echo '<div class="alert alert-danger" role="alert">';
        echo $errorLogin;
        echo '</div>';
      }
      ?>
    <form action="index.php" method="POST">

      <div class="form-group">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su nombre de usuario" name="username">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su Contraseña" name="password">
      </div>
      <button type="submit" class="btn btn-pag">Submit</button>
    </form>   
  </main>
	<!-- /Main -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>