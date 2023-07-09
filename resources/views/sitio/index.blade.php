<!DOCTYPE html>
<html lang="es">

@include('sitio.estructura.head')

<body>

  @include('sitio.estructura.menu')

  <main id="main">

    @include('sitio.estructura.secciones.header')
    {{-- @include('sitio.estructura.secciones.about') --}}
    @include('sitio.estructura.secciones.servicios')
    @include('sitio.estructura.secciones.portafolio')
    @include('sitio.estructura.secciones.precio')
    @include('sitio.estructura.secciones.contact')

  </main><!-- End #main -->

  @include('sitio.estructura.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('sitio.estructura.scripts')

</body>

</html>
