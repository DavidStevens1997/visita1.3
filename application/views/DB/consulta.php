<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="utf-8">
<title>Consulta</title>
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <a href="#" class="navbar-brand">Tabla de consulta</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://[::1]/visita1.3/index.php/validar/inicial" class="smoothScroll">VOLVER</a></li>
      </ul>
    </div>
  </div>
</section><br><br><br><br><br>

<script >
    $(document).ready(function(){
      $("#btn_eliminar").click(function(){
        var eliminar= "elim";
          $("#form").attr("action",eliminar);
      });
    });
</script>

<div align="center">
  <form action="" method="post" id="form">
    <input type="text" name="llave" placeholder="Cedula" style="margin-left:1%; width:245px; margin-bottom:0px;"></input>
    <input type="submit" name="eliminar" value="Eliminar" id="btn_eliminar" style="margin-right:35%; margin-top:0px;"></input>
  </form>

  <table border="1" >
      
      <tr>
        <th><h3>cedula</h3></th>
        <th><h3>placa</h3></th>
        <th><h3>aseguradora</h3></th>
        <th><h3>lamina</h3></th>
        <th><h3>pintura</h3></th>
        <th><h3>mecanica</h3></th>
        <th><h3>repuestos</h3></th>
      </tr>
      

      <?php foreach($completo as $valor): ?>
        
        <?php
          echo 
          '<tr>
            <td>'.$valor['cedula'].'</td>
            <td>'.$valor['placa'].'</td>
            <td>'.$valor['aseguradora'].'</td>
            <td align="center">'."<button align='center'<i class='fa fa-gavel' style='font-size:20px;color:red'></i> </button>".'</td>
            <td align="center">'."<button align='center'<i class='fa fa-tint' style='font-size:20px;color:red'></i> </button>".'</td>
            <td align="center">'."<button align='center'<i class='fa fa-wrench' style='font-size:20px;color:red'></i> </button>".'</td>
            <td align="center">'."<button align='center'<i class='fa fa-gear' style='font-size:20px;color:red'></i> </button>".'</td>
          </tr>';
        ?>
        
      <?php endforeach;?>
  </table>
</div>



<script>

  function showHint(str) {
    var xhttp;
    if (str.length == 0) { 
      document.getElementById("txtHint").innerHTML = "";
      return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "$valor?q="+str, true);
    xhttp.send();
  }
</script>


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


