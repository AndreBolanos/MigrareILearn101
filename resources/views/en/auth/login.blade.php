<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width,maximum-scale=1.0,user-scalable=no,initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script src="{{ mix('js/app.js') }}"></script>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
    rel="stylesheet">

  <title>ELearning Migrare 101</title>

  @if ($errors->has('nameU') || $errors->has('emailU') || $errors->has('passwordU') || $errors->has('passwordU_confirmation'))
  <script>
      $( document ).ready(function() {
          $('#exampleModal').modal('show');
      });
  </script> 
@endif
<script>
  $( document ).ready(function() {
    $('#exampleModal').on('hidden.bs.modal', function(){
      location.reload();
      
  
  });
  });
</script> 

</head>

<body>
  <div class="main-container">
    <div class="jumbotron form-signin">
      <h1 id="titleApp" class="row justify-content-center">Bienvenido a Migrare Elearning 101</h1>
      <p id="pApp" class="lead">Desarrollo tus capacidades con cursos Online a tu ritmo y horario de conveniencia,
        prepárate para un mejor futuro.</p>
      <p class="lead text-center  ">¡Ingresa ahora mismo y haz la diferencia!</p>
      <div class="row">
        <div class="col text-center"><button id="reg" type="button" class="btn btn-warning btn-block"
            style="box-shadow: 0 16px 24px 2px rgba(0, 0, 0, .14), 0 6px 30px 5px rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2)"
            data-toggle="modal" data-target="#exampleModal"><span style="font-size: 1.0rem">Regístrate
              Aquí</span></button></div>
      </div>
      <hr class="my-4" id="hrForm">
      <div class="row" id="formRow">
        <div class="col-12 col-sm-4 col-md-6 text-center my-auto" id="logoS">
          <!-- <img id="logoSchool" src="img/ColegioBrooklyn.jpg" class="img-fluid" alt="Responsive image"> -->
          <h2>Logo</h2>
        </div>
        <div class="col-12 col-sm-8 col-md-6">
          <form id="userForm" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
              <div class="col-2 text-right"></div>
              <div class="col-10">
                <!--
                  <div class="form-check float-right">
                    <label class="form-check-label" for="gridCheck1" id="tipoUsuario">
                      Tipo de Usuario
                    </label>
                    <input class="form-check-input" type="checkbox" data-toggle="toggle" data-size="xs"
                      data-onstyle="warning" data-offstyle="secondary" checked data-on="Cliente" data-off="Empleado"
                      id="myCheck" onchange="myFunction(this)">
                  </div>
                  -->
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-3 col-form-label text-right form-control-sm">Usuario</label>
              <div class="col-9">
                <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror"
                  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                  placeholder="Ingrese correo electronico">
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-3 col-form-label text-right form-control-sm">Contraseña</label>
              <div class="col-9">
                <input id="password" type="password"
                  class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required
                  autocomplete="current-password" placeholder="Ingrese contraseña">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror

              </div>
            </div>

            <div class="form-group row">
              <div class="col-3 text-right"></div>
              <div class="col-9">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" data-toggle="toggle" data-size="xs"
                    data-onstyle="primary" data-offstyle="secondary" name="remember" id="remember" checked data-on="Si"
                    data-off="No" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="gridCheck1" id="labelRemember">
                    Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-3"></div>
              <div class="col-9 text-right">
                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Olvido su contraseña?') }}
                </a>
                @endif
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <footer>
      <!-- Copyright -->
      <div class="footer-copyright text-center py-2" style="color: azure;font-size: 12px;">© 2020 Copyright, developed
        by
        Ing. André Bolaños</div>
      <!-- Copyright -->
    </footer>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro Nuevo Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="newUserF" method="POST" action="{{ route('registerUser') }}">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="nameU" value="{{ old('nameU') }}" required class="form-control{{ $errors->has('nameU') ? ' is-invalid': '' }}">
        
                @if ($errors->has('nameU'))
                <span class="invalid-feedback">
                    <strong class="strongText">{{ $errors->first('nameU') }}</strong>
                </span>    
                @endif
        
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="emailU" value="{{ old('emailU') }}" required class="form-control{{ $errors->has('emailU') ? ' is-invalid': '' }}">
        
                @if ($errors->has('emailU'))
                <span class="invalid-feedback">
                    <strong class="strongText">{{ $errors->first('emailU') }}</strong>
                </span>    
                @endif
        
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="passwordU" required class="form-control{{ $errors->has('passwordU') ? ' is-invalid': '' }}">
        
                @if ($errors->has('passwordU'))
                <span class="invalid-feedback">
                    <strong class="strongText">{{ $errors->first('passwordU') }}</strong>
                </span>    
                @endif
        
            </div>
            <div class="form-group">
                <label for="">Retyped Password</label>
                <input type="password" name="passwordU_confirmation" required class="form-control">
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" form="newUserF" class="btn btn-primary">Registrarse</button>
        </div>
      </div>
    </div>
  </div>


  
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
</body>

</html>