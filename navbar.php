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