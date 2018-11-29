<?php include $_SERVER['DOCUMENT_ROOT'] .'/PirateTeaParty/templates/master.php' ?>
<script src="js/miJS/prueba.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php startblock('titulo')?>
    Index
<?php endblock()?>

<?php startblock('principal')?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

<!-- indicators -->
<ol class="carousel-indicators">
  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol>

<!-- inner -->
<div class="carousel-inner" role="listbox">
  <div class="item active">
    <img src="img/pirata1.jpg"" alt="Preparado para saber más sobre piratas?">
         
  </div>
  <div class="item">
    <img src="img/pirata2.jpg"  alt="Pues bienvenido! a PirateTeaParty!">
  </div>
  <div class="item">
    <img src="img/pirata3.jpg"  alt="Registrate en el botón de abajo _:">        
  </div>
</div>

<!-- controls -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>

</div>
<footer>
<div style="background-color: #7FCEC5;">
  <div class="container">

    <!-- Grid row-->
    <div class="row py-4 d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 text-center text-md-left mb-4 mb-md-0">
        <h6 class="mb-0" style="color:white;font-size:30px;">Síguenos a nuestras redes!</h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 col-lg-7 text-center text-md-right">

            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>

      </div>

    </div>
  </div>
</div>

<div class="container text-center text-md-left">

  <div class="row mt-3">

    <div class="col-md-3 col-lg-5 col-xl-3 mx-auto mb-4">

      <h6 class="text-uppercase font-weight-bold">Sobre nosotros</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>El grupo que ha realizado esta actividad interactiva formado por: Samu,Xavi,Christian y Daniel</p>
        <br>
      <a href="paginachristian.php">  <p> Leer Más ... </p> </a> 
    </div>

    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase font-weight-bold">Contacto</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
            <a href="http://www.cepnet.net">Centre d'estudis Politècnics, Barcelona</a>
          </p>

    </div>

  </div>

</div>
<div class="footer-copyright text-center py-3">© 2018 Copyright:
  <a href="https://mdbootstrap.com/education/bootstrap/"> PirateTeaParty.com </a>  Todos los derechos reservados.
</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<?php endblock()?>