<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clinica Jesucristo da Vida</title>
	<meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
	
	<link rel="stylesheet" href=" {{ asset('css/style.css') }}">
	<link rel="stylesheet" href=" {{ asset('css/style1.css') }}">

	<script type="text/javascript" src="{{ asset('js/jquery-3.0.0.min.js') }}" ></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <header>
	<div class="r-navbar">
	  <ul class="r-navbar-sup">
	  	<li class="pacientes"><a href="#">Pacientes</a></li>
		  <li class="r-dropdown"><a href="#" class="r-dropbtn">Almacen</a>
		  <div class="r-dropdown-content">
		  	<a href="#">insumos</a>
		  	<a href="#">productos</a>
		  	<a href="#">tratamientos</a>
		  </div>
		  </li>
		  <li><a href="#">Clinicas</a></li>

	  </ul>
	  <div class="r-logotipo">
			<img class="r-img-portada" src="images/portada1.jpg" alt="" />
	  	<h2>Una buena opcion para tu paladar.</h2>
	  </div>
	 <div class="r-menu-secundario">
		 <ul class="r-navbar-inf">
		 	<li><a href="#">Datos Personales</a></li>
			<li><a href="#">Odontograma</a></li>
			<li><a href="#">Hisotirial</a></li>
			<li><a href="#">Cuentas</a></li>
		</ul>
		<form  action="index.html" metdod="post">
			<input class="r-search-in" type="text" name="search" placeholder="Buscar Paciente......">
			<input class="r-search-go" type="button" name="name" value="Buscar">
		</form>

	 </div>
	</div>
  </header>
	<div class="r-row">
		<div class="r-col-3 r-col-m-3">
			<div class="r-container">
				<div class="r-container-card">
					<div class="r-card-header r-blue-light-3">
						<h2 class="r-text-white">Navegaci&oacute;n</h2>
					</div>
					<div class="r-card-body">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="r-card-footer r-blue-light-3">

					</div>
				</div>
			</div>
		</div>
		<!--hasta aqui es una fila de 3 columnas x--->
		@yield('content')
	</div>


  <div class="r-row">
     <div class="r-col-12 r-col-m-12">
       <div class="r-footer">
         <div class="r-container r-blue-darken-3">
           <h3 class="r-text-white">INFORMACION</h3>
         </div>
         <div class="r-footer-lic r-blue-darken-4">

         </div>
       </div>
     </div>
   </div>

</body>
<script>
 $(document).ready(function(){
   $(".pacientes").click(function(){
     $(".r-menu-secundario").slideToggle("slow");
   });
 });
</script>
</html>
