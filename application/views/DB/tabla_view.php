<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="utf-8">
<title>Inicial</title>
<!--estyles-->
<style>
	
	.content {
	    max-width: 500px;
	    margin: auto;
	}
	/* Extra styles for the cancel button */
	.cancelbtn {
	    width: auto;
	    padding: 10px 18px;
	    background-color: #f44336;
	}
	.regisbtn{
		width: auto;
	    padding: 10px 18px;
		background-color: #4CAF50;
	}

	/* Center the image and position the close button */
	.imgcontainer {
	    text-align: center;
	    margin: 24px 0 12px 0;
	    position: relative;
	}

	img.avatar {
	    width: 40%;
	    border-radius: 50%;
	}

	span.psw {
	    float: right;
	    padding-top: 16px;
	}
	/* The Modal (background) */
	.modal {
	    display: none; /* Hidden by default */
	    position: fixed; /* Stay in place */
	    z-index: 1; /* Sit on top */
	    left: 0;
	    top: 0;
	    width: 100%; /* Full width */
	    height: 100%; /* Full height */
	    overflow: auto; /* Enable scroll if needed */
	    background-color: rgb(0,0,0); /* Fallback color */
	    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	    padding-top: 60px;
	}

	/* Modal Content/Box */
	.modal-content {
	    background-color: #fefefe;
	    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
	    border: 1px solid #888;
	    width: 50%; /* Could be more or less, depending on screen size */
	}

	/* The Close Button (x) */
	.close {
	    position: absolute;
	    right: 25px;
	    top: 0;
	    color: #000;
	    font-size: 35px;
	    font-weight: bold;
	}

	.close:hover,
	.close:focus {
	    color: red;
	    cursor: pointer;
	}

	/* Add Zoom Animation */
	.animate {
	    -webkit-animation: animatezoom 0.6s;
	    animation: animatezoom 0.6s
	}

	@-webkit-keyframes animatezoom {
	    from {-webkit-transform: scale(0)} 
	    to {-webkit-transform: scale(1)}
	}
	    
	@keyframes animatezoom {
	    from {transform: scale(0)} 
	    to {transform: scale(1)}
	}

	/* Change styles for span and cancel button on extra small screens */
	@media screen and (max-width: 300px) {
	    span.psw {
	       display: block;
	       float: none;
	    }
	    .cancelbtn {
	       width: 100%;
	    }
	    .regisbtn{
	       width: 100%;
	    }
	}
</style>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!--

	Template 2075 Digital Team

	http://www.tooplate.com/view/2075-digital-team

	-->
	<link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/css/et-line-font.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/css/nivo-lightbox.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/css/style.css">
	<link href='http://localhost/visita1.2/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-circle">
       <div class="sk-circle1 sk-circle"></div>
       <div class="sk-circle2 sk-circle"></div>
       <div class="sk-circle3 sk-circle"></div>
       <div class="sk-circle4 sk-circle"></div>
       <div class="sk-circle5 sk-circle"></div>
       <div class="sk-circle6 sk-circle"></div>
       <div class="sk-circle7 sk-circle"></div>
       <div class="sk-circle8 sk-circle"></div>
       <div class="sk-circle9 sk-circle"></div>
       <div class="sk-circle10 sk-circle"></div>
       <div class="sk-circle11 sk-circle"></div>
       <div class="sk-circle12 sk-circle"></div>
    </div>
</div>

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Los Camperos</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#1" onclick="document.getElementById('id01').style.display='block'" class="smoothScroll">REGISTRO CLIENTE</a></li>
				<li><a href="#2" onclick="document.getElementById('id02').style.display='block'" class="smoothScroll">REGISTO VEHÍCULO</a></li>
				<li><a href="consulta" class="smoothScroll">CONSULTAR</a></li>
				<li><a href="http://[::1]/visita1.3/index.php/Primero/login" class="smoothScroll">SALIR</a></li>
			</ul>
		</div>
	</div>
</section>

<!--Registro cliente-->
<div id="id01" class="modal" >
  
  <form class="modal-content animate" action="" method="post" id="form">
	    <div class="imgcontainer">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	      <img src="<?php echo base_url();?>/images/men.png" width="140" height="140" >    
	    </div>
		    <div align="center">
		          <label><b>Cedula:</b></label>
			      <input type="text" placeholder="Enter Username" name="cedul" required><br><br>

			      <label><b>Nombres</b></label>
			      <input type="text" placeholder="Enter Password" name="nom" required><br><br>

			      <label><b>Apellidos</b></label>
			      <input type="text" placeholder="Enter Password" name="ape" required><br><br>
			        
			      <label><b>Telefono</b></label>
			      <input type="text" placeholder="Enter Password" name="tel" required><br><br>

			      <label><b>Dirección</b></label>
			      <input type="text" placeholder="Enter Password" name="dir" required><br><br>
			</div>
		
		    <div align="center" style="background-color:#f1f1f1" >
		      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		      <input onclick="document.getElementById('id01').style.display='none'" class="regisbtn" type="submit" name="enviar" value="Guardar"  id="btn_guardarr"></input>
		    </div><br>
	    
  </form>
</div>

<!--Registro Vehículo-->
<div id="id02" class="modal">
  
    <form class="modal-content animate" action="" method="post" id="form">
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
		      <img src="<?php echo base_url();?>/images/car.png" width="160" height="140" >    
		    </div>

		    <div align="center">
		      
		       <table style="width:80%">
						  <tr>
						    <td><label><b>Placa:</b></label>
			      				<input type="text" placeholder="Enter Username" name="pla" required><br><br>
			      			</td>
						    <td><label><b>Color</b></label>
			      				<input type="text" placeholder="Enter Password" name="col" required><br><br>
			      			</td>
						    <td> <label><b>Aseguradora</b></label>
			      				 <input type="text" placeholder="Enter Password" name="ase" required><br><br>
			      			</td>
						  </tr>
						  <tr>
						    <td><label><b>Marca</b></label>
			      				<input type="text" placeholder="Enter Password" name="mar" required><br><br>
			      			</td>
						    <td><label><b>Cilindraje</b></label>
			      				<input type="text" placeholder="Enter Password" name="cili" required><br><br>
			      			</td>
						    <td><label><b>Cedula Propietario</b></label>
			      				<input type="text" placeholder="Enter Password" name="celpro" required><br><br>
			      			</td>
						  </tr>
						  <tr>
						    <td><label><b>Clase</b></label>
			      				<input type="text" placeholder="Enter Password" name="clas" required><br><br>
			      			</td>
						  </tr>
			    </table>
		    </div>

		    <div align="center" style="background-color:#f1f1f1" >
		      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
		      <input onclick="document.getElementById('id02').style.display='none'" class="regisbtn" type="submit" name="enviar" value="Guardar" id="btn_guardarrr"></input>
		    </div><br>
    </form>
</div>

<!-- FORM -->
<script>
	

	// When the user clicks anywhere outside of the modal, close it
	

	$(document).ready(function(){


		$("#btn_guardar").click(function(){
			var guardar= "guardar";
			 $("#form").attr("action",guardar);
	 });
		$("#btn_guardarr").click(function(){
			var guardarr= "guardarr";
			 $("#form").attr("action",guardarr);
	 });
		$("#btn_guardarrr").click(function(){
			var guardarrr= "guardarrr";
			 $("#form").attr("action",guardarrr);
	 });

		/*$("#btn_eliminar").click(function(){
			var eliminar= "elim";
			 $("#form").attr("action",eliminar);
	 });*/
	 $("#btn_actualizar").click(function(){
		 var actua	= "update";
			$("#form").attr("action",actua);
		});

	 /*$("#btn_consultar").click(function(){
		 var busca	= "consulta";
			$("#form").attr("action",busca);
		});*/
	});

	
</script><br><br><br><br>



	<li><a href="http://[::1]/visita1.3/index.php/Primero/login" class="smoothScroll">SALIR</a></li><br>
	
	<form action="" method="post" id="form">
	  <label>Cedula  </label><input type="text" name="llave" placeholder="Aqui la Cedula"></input><br><br>
	  <label>Nombres  </label><input type="text" name="nom" placeholder="nombres"></input><br><br>
	  <label>Apellidos  </label><input type="text" name="ape" placeholder="apellidos"></input><br><br>
	  <label>Marca  </label><input type="text" name="mar" placeholder="apellidos"></input><br><br>
	  <label>Clase  </label><input type="text" name="cla" placeholder="apellidos"></input><br><br>
	  <label>Color  </label><input type="text" name="col" placeholder="apellidos"></input><br><br>
	  <label>Cilindraje  </label><input type="text" name="cil" placeholder="apellidos"></input><br><br>
	  <label>Placa  </label><input type="text" name="pla" placeholder="apellidos"></input><br><br>
	  <label>Aseguradora  </label><input type="text" name="ase" placeholder="apellidos"></input><br><br>
	  <label>Nivel  </label><input type="text" name="niv" placeholder="apellidos"></input><br><br>
		<input type="submit" name="enviar" value="Guardar"  id="btn_guardar"></input>
		<input type="submit" name="actualizar" value="Actualizar"  id="btn_actualizar"></input>

		<!--<input type="submit" name="buscar" value="Consulta Producto"  id="btn_consultar"></input>-->

    </form> <br><br>
		

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>UCP © Creda por Jhnathan Alvarez y David Hurtado</p>
				<hr>
			</div>
		</div>
	</div>
</footer>


<script src="<?php echo base_url();?>/js/jquery.js"></script>
<script src="<?php echo base_url();?>/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/js/smoothscroll.js"></script>
<script src="<?php echo base_url();?>/js/isotope.js"></script>
<script src="<?php echo base_url();?>/js/imagesloaded.min.js"></script>
<script src="<?php echo base_url();?>/js/nivo-lightbox.min.js"></script>
<script src="<?php echo base_url();?>/js/jquery.backstretch.min.js"></script>
<script src="<?php echo base_url();?>/js/wow.min.js"></script>
<script src="<?php echo base_url();?>/js/custom.js"></script>

</body>
</html>

