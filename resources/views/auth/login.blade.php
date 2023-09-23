<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ URL::asset('/assets/css/styles.min.css') }}">

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>MAXTDES - Acceder</title>

</head>
<style>
  body {
      background-image: url('/img/bg_maxtdes_desktop.jpg');
      background-size: cover;
      background-repeat: no-repeat;
  }

  @media (max-width: 768px){
    body {
      background-size: cover;
      background-repeat: no-repeat;
  }
  }

  .card {
      max-width: 410px;
      margin: auto;
      background-color: #d9be7a;
  }
  .form-check-label {
      padding-left: 0;
  }

  .btn-warning{
    color: #ffffff;
  }
  .img {
  vertical-align: middle;
  border-style: none;
  }
  #shadow_card {
      -webkit-box-shadow: -3px -1px 21px -2px rgba(0,0,0,0.92); 
      box-shadow: -3px -1px 16px -2px rgba(0,0,0,0.92);
      background: #ffffff;
  }
  .href{
    color:#d9be7a;
}

</style>
<body>
    <div class="container-fluid position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="card" id="shadow_card">
      <div class="card-body">
          <div class="text-center" style="padding-left: 12%; padding-bottom: 2%; padding-top: 5%">
              <img src="{{ asset('/img/LOGO ACADEMICO.png') }}" alt="Imagen Responsiva" class="img-fluid" style="max-width: 100%; width: 50%; height: auto;">
          </div>
          <p class="text-center">Maximiza tu desarrollo</p>
          <form method="POST" action="{{ route('login') }}">
              @csrf
            <br>
              <div class="mb-3">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electrónico">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="mb-3">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="remember">
                  <label class="form-check-label" for="remember">Recuérdame</label>
              </div>
              <div class="mb-3 text-center">
                  <a href="#" class="href">Términos y Condiciones</a>
              </div>
              <div class="mb-3 text-center">
                  <button type="submit" class="btn btn-warning btn-lg">Iniciar Sesión</button>
              </div>
          </form>
          <div class="mb-3 text-center">
              <p>O inicia sesión con:</p>
              <a href="#" class="btn btn-danger">Google</a>
          </div>
      </div>
  </div>
  </div>
  <script src="{{ asset ('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset ('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('/assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset ('/assets/js/app.min.js') }}"></script>
  <script src="{{ asset ('/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset ('/assets/libs/simplebar/dist/simplebar.js') }}"></script>
</body>
</html>
