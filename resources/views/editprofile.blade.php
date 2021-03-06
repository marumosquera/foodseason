@extends("layouts.template")
@section("title")
  Foodseason - Editar perfil
@endsection
<link rel="icon" href="{{ asset('img/foodseasonicon.ico') }}">
@section("body")
@include('partials.header')
  <body class="editprofile-body">
<div class="container editprofile" style="justify">
<div class="row">
  <div class="col-xs-12 col-sm-9">
    <form class="form-horizontal" action="editprofile" method="POST" role="form" enctype="multipart/form-data">
      @csrf
        <div class="panel panel-default">
          <div class="panel-body text-center">
            @if(auth()->user()->profile_image)
            <img src="storage/profilePictures/{{auth()->user()->profile_image}}" class="img-circle profile-avatar" alt="User avatar">
            @else
              <img src="img/profiledefault.png" class="img-circle profile-avatar" alt="User avatar">
            @endif
          </div>
          <br>
          <div class="form-group">
            <div class="col-md-6">
              <input id="profile_image" type="file" class="form-control" name="profile_image">
              @if (auth()->user()->profile_image)
                <code>{{ auth()->user()->profile_image }}</code>
              @endif
            </div>
          </div>
        </div>
      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Cuenta</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nombre de usuario</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name='username' value="{{ old('username', auth()->user()->username) }}">
              @if($errors->has('username'))
              <p>{{ $errors->first('username') }}</p>
              @endif
            </div>
            @if($errors->has('username'))
            <p>{{ $errors->first('username') }}</p>
            @endif
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name='email' value="{{ old('email', auth()->user()->email) }}">
              @if($errors->has('email'))
              <p>{{ $errors->first('email') }}</p>
              @endif
            </div>
            @if($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
            @endif
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Biograf??a</label>
            <div class="col-sm-10">
              <textarea rows="3" class="form-control" name="bio" value="">{{ old('bio', auth()->user()->bio) }}</textarea>
            </div>
            </div>
            </div>
      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Informaci??n</h4>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Pa??s</label>
          <div class="col-sm-10">
            @include('partials.listaDePaises')
          </div>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Numero de tel??fono</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" name='tel??fono' value="{{ old('tel??fono', auth()->user()->tel??fono) }}">
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Seguridad</h4>
        </div>
        <div class="panel-body">

          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nueva contrase??a</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="newpassword" placeholder="Nueva contrase??a" value="">
            </div>
            @if($errors->has('newpassword'))
            <p>{{ $errors->first('newpassword') }}</p>
            @endif
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Confirmar contrase??a</label>
            <div class="col-sm-10">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repet?? tu nueva contrase??a">
              @if($errors->has('password'))
              <p>{{ $errors->first('password') }}</p>
              @endif
            </div>
            <br>
              <div class="panel panel-default">
              <div class="panel-heading">
              <h4 class="panel-title">Ingres?? tu contrase??a para guardar cambios</h4>
              </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Contrase??a actual</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" required>
                @if(isset($errorPassword))
                      <span class="error-form">{{$errorPassword}}</span>
                  @endif
                  {{-- @if($errors->has('password'))
                  <p>{{ $errors->first('password') }}</p>
                  @endif --}}
              </div>
              </div>
          {{-- <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <div class="checkbox">
                <input type="checkbox" id="checkbox_1">
                <label for="checkbox_1">Deseo que mi cuenta sea p??blica</label>
              </div>
            </div>
          </div> --}}
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <button type="submit" class="btn btn-danger" style="background-color: #e24e42; color:white">Guardar</button>
              <button type="reset" class="btn btn-warning" style="background-color: #E9B000; color:white">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
  </body>
  @endsection
