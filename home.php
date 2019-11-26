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
  				<img src="logo2.png" width="30" height="30">
  				ProgramEd
  			</a>
			<div class="collapse navbar-collapse" id="navbarNav">
		    	<ul class="navbar-nav ml-auto">
		      		<li class="nav-item active">
		        		<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="temas.php">Temas</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="cursos.php">Cursos</a>
		      		</li>
		      		<li class="nav-item">
		      			<a class="nav-link" href="contacto.php">Contacto</a>
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
	<main id="main">
      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/banner1.png" alt="ProgramEd 1">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/banner2.png" alt="ProgramEd 2">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/banner3.jpg" alt="ProgramEd 3">
          </div>
          <div class="overlay">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-6 text-center text-md-left">
                  <h1>Aprende a Programar con Nosotros</h1>
                  <p class="d-none d-md-block">

                    Con videos, lecturas y problemas. <br>
                    Sin lagunas, a tu ritmo. <br>
                    Conviertete en un campeón de la programación <br>	
                  </p>
                  <button type="button" class="btn btn-pag" data-toggle="modal" data-target="temas.php" onclick="window.location.href = 'temas.php';">Empezar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
	<!-- /Main -->
	<footer id="footer">
		Creado por Rodolfo Catunta
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>