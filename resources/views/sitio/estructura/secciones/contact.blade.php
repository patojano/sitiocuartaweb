<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contacto</h2>
    </div>

    <div>
      {{-- <iframe style="" src="https://goo.gl/maps/usmKoVq3LKXCPjEn8" frameborder="0" allowfullscreen></iframe> --}}
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1757352.2185778792!2d-72.0821761195573!3d-30.652875465505826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96893835f8510297%3A0x85982eeec5cf03a1!2sCoquimbo!5e0!3m2!1ses!2scl!4v1688853995542!5m2!1ses!2scl" width="600" height="450" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Ubicación:</h4>
            <p>IV Región de Coquimbo, Chile</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>contacto@cuartaweb.cl</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Télefono:</h4>
            <p>+56 9 8476 6773</p>
            <p>+56 9 3744 8807</p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="{{ url('/sitio/contacto') }}" method="post" role="form" class="php-email-form">
          @csrf
          <div class="row gy-2 gx-md-3">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Ingresa tu Nombre" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu Email" required>
            </div>
            <div class="form-group col-12">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
            </div>
            <div class="form-group col-12">
              <textarea class="form-control" name="message" rows="5" placeholder="Ingresa tu mensaje" required></textarea>
            </div>
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissable fade show" id="mensaje" role="alert">
              <span>{{ $message }}</span>
            </div>
            @elseif($message = Session::get('error'))
            <div class="alert alert-danger alert-dismissable fade show" id="mensaje" role="alert">
              <span>{{ $message }}</span>
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
              <h4 class="is-size-4">Por favor, valida los siguientes errores:</h4>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <div class="text-center col-12"><button type="submit">Enviar mensaje</button></div>
          </div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
