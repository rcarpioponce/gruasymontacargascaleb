<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
@include('web.head')
</head>

<body>

  <!-- Full Body Container -->
  <div id="container">
    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
      @include('web.topbar')
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top">
          @include('web.menu')
      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->


    @yield('content')




    <!-- Start Footer Section -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">



          <!-- Start Contact Widget -->
          <div class="col-lg-4 col-md-3 col-xs-12">
            <div class="footer-widget contact-widget">
              <h4>La empresa</h4>
              <p>Gruas y Montacargas Caleb es una empresa especializada en brindar servicios de alquiler de gruas telescopicas, montacargas, camiones gruas y maniobras en espacios inaccesibles y/o espacios reducidos.

Brindamos un servicio con seguridad y garantía con la finalidad de cubrir las necesidades de nuestros clientes.

Contamos con personal operativo capacitado que cuenta con certicifación de normas internacionales.</p>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->
          <div class="col-lg-4 col-md-3 col-xs-12">
            <div class="footer-widget contact-widget">
              <h4>Misión</h4>
              <p>Brindar un buen servicio eficiente y seguro con la finalidad de aportar al crecimiento de nuestros clientes y el nuestro, así como el de nuestros colaboradores que son nuestro principal recurso.</p>
            </div>
          </div>


          <div class="col-lg-4 col-md-3 col-xs-12">
            <div class="footer-widget contact-widget">
              <h4>Visión</h4>
              <p>Ser considerada y reconocida como una de las empresas que lidere el mercado peruano en el rubro, manteniendo calidad, satisfacción y confianza de todos nuestros clientes, y ser una empresa atractiva para nuestros colaboradores.</p>
            </div>
          </div>


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2016 Gruas y Montacargas Caleb - Todos los derechos reservados</p>
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-6">
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer Section -->


  </div>
  <!-- End Full Body Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>


  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>