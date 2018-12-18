<?php include $_SERVER['DOCUMENT_ROOT'] .'/PirateTeaParty/templates/master.php' ?>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<?php startblock('titulo')?>
    Index
<?php endblock()?>

<?php startblock('principal')?>
    <!-- Header -->
    <div id="obtenercookie" >

</div>

    <header id="principal-header">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Hola!</div>
                <div class="intro-heading">Bienvenidos/as a la aventura sobre los piratas en el mediterraneo!</div>
                <button type="button" class="page-scroll btn btn-xl" data-toggle="modal" data-target="#registerModal">Registrarme ahora!</button>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Comienza la aventura , registrate Arg!</h2>
                    <h3 class="section-subheading text-muted">(Es gratis , y lo seguirá siendo)</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Es gratis y para todos los públicos</h4>
                    <p class="text-muted">Nuestra intención es meramente didàctica a la vez que entretenida.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Responsive Design</h4>
                    <p class="text-muted">Funciona perfectamente en cualquier plataforma (Pc,móvil).</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Tus datos están seguros con nosotros</h4>
                    <p class="text-muted">Tomamos las medidas para que no hayan robos de tus datos.</p>
                </div>
            </div>
        </div>
    </section>

<footer class="mt-1">
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

            <a href="https://wwww.facebook.com" target="_blank" class="fa fa-facebook" style="text-decoration:none;"></a>
            <a href="https://twitter.com/" target="_blank" class="fa fa-twitter" style="text-decoration:none;"></a>
            <a href="https://www.instagram.com" target="_blank" class="fa fa-instagram" style="text-decoration:none;"></a>
            <a href=" https://www.youtube.com/" target="_blank" class="fa fa-youtube" style="text-decoration:none;"></a>

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
      <a href="IntroductionCard.php">  <p> More about Development TEAM. </p> </a> 
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
  <a href="#"> PirateTeaParty.com </a>  Todos los derechos reservados.
</div>
</footer>

<?php endblock()?>

<?php startblock('scripts')?>
<script>
    if(comprobarCookie('enigma2counter')){
        eraseCookie('enigma2counter');
    }
</script>
<?php endblock()?>