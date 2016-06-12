@extends('web.base')
@section('content')
<div id="content">
      <div class="container">

        <div class="row">

          <div class="col-md-8">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Formulario de Contacto</span></h4>

            <!-- Start Contact Form -->
            <form role="form" class="contact-form" id="contact-form" method="post">
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Nombre" name="name">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="email" class="email" placeholder="Email" name="email">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" class="requiredField" placeholder="Asunto" name="subject">
                </div>
              </div>

              <div class="form-group">

                <div class="controls">
                  <textarea rows="7" placeholder="Mensaje" name="message"></textarea>
                </div>
              </div>
              <button type="submit" id="submit" class="btn-system btn-large">Enviar</button>
              <div id="success" style="color:#34495e;"></div>
            </form>
            <!-- End Contact Form -->

          </div>

          <div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Información</span></h4>


            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>

            <!-- Info - Icons List -->
            <ul class="icons-list">

              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> gruasymontacargas10@gmail.com</li>
              <li><i class="fa fa-mobile"></i> <strong>Teléfono:</strong> 950279816 / 5659311</li>
            </ul>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:15px;"></div>

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Horario de Trabajo</span></h4>

            <!-- Info - List -->
            <ul class="list-unstyled">
              <li><strong>Lunes - Viernes</strong> - 9am a 6pm</li>
            </ul>

          </div>

        </div>

      </div>
    </div>
@stop