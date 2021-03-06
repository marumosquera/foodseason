@extends("layouts.template")
@section("title")
Foodseason - FAQS
@endsection
@section("body")
<body class="faqs-body">
    @include('partials.header')
    <div class="inicio">
      <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12" style="margin:30px">
          <h2 style="color:white; margin:20px; text-align:center;">¿Tenes alguna duda?¡Estamos para ayudarte!</h2>
          <div class="row">
  <div class="col-xs-6 col-md-6 col-lg-4" style="padding-left:32px; margin:auto;" >
    <div class="input-group">
      {{-- <span class="input-group-btn">
        <button class="btn btn-warning" style="color:white; background-color: #E9B000" type="button">Buscar</button>
      </span>
      <input type="text" class="form-control" placeholder="¿Necesitas ayuda? Busca en nuestros items..."> --}}
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
        </div>
      </div>
    </div>
      <section>
      <div class="row">
        <div class="col-xs-6 col-md-6 col-lg-4">
          <div class="ayuda">
            <br>
          <h3 style="color:white; padding-left:20px;" >Preguntas más frecuentes</h3>
            <br>
          </div>
        </div>
      </div>
      <div class="accordion" id="accordionExample">
      <div class="preguntas" style="margin:auto;">
        <div class="container">
        <div class="row">
      <div class="col-xs-10 col-md-6 col-lg-6">
      <div class="accordion" id="accordionExample">
        <div class="card text-white bg-danger mb-3" >
            <div class="card-header" style="background-color: #E24E42" id="headingOne" >
            <h2 class="mb-0">
              <i class="fas fa-hamburger"></i>
              <br>
                <button class="btn btn-outline-light collapsed"  style="background-color: #E24E42" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne";>
                  ¿Qué es Food Season?
              </button>
            </h2>
          </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body" style="background-color: #EB6E80">
                  Food Season es una red social donde podrás compartir tus recetas y a su vez ver las recetas de tus amigos. De esta forma crearas comidas deliciosas y creativas. Dandote la posibilidad de no solo de compartir tus recetas sino también de mejorarlas con la colaboracion de tus amigos.
                </div>
              </div>
            </div>
        </div>
      </div>
        <div class="col-xs-10 col-md-6 col-lg-6">
        <div class="accordion" id="accordionExample">
          <div class="card text-white bg-danger mb-3" >
              <div class="card-header" style="background-color: #E24E42" id="headingTwo">
              <h2 class="mb-0">
                <i class="far fa-laugh-beam"></i>
                <br>
                <button class="btn btn-outline-light collapsed"  style="background-color: #E24E42" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Hacer amigos
                </button>
              </h2>
            </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body" style="background-color: #EB6E80">
                    Food Season es una red social donde podrás compartir tus recetas y a su vez ver las recetas de tus amigos. Para hacer amigos ve a su perfil y haz click en "seguir".
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-xs-10 col-md-6 col-lg-6">
          <div class="accordion" id="accordionExample">
          <div class="card text-white bg-danger mb-3">
              <div class="card-header" style="background-color: #E24E42" id="headingThree">
              <h2 class="mb-0">
                <i class="fas fa-ice-cream"></i>
                <br>
                <button class="btn btn-outline-light collapsed" style="background-color: #E24E42" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Cerrar tu cuenta
                </button>
              </h2>
              </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body" style="background-color: #EB6E80">
                    ¡No nos abandones! ¡Food Season te va a extrañar! De todas formas, cerrar tu cuenta es muy simple. Ve a configuración de tu cuenta y haz click en "Cerrar cuenta".
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-xs-10 col-md-6 col-lg-6">
              <div class="card text-white bg-danger mb-3">
                <div class="accordion" id="accordionExample">
                <div class="card-header" style="background-color: #E24E42" id="headingFour">
              <h2 class="mb-0">
                <i class="fas fa-candy-cane"></i>
                <br>
                <button class="btn btn-outline-light" style="background-color: #E24E42" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Problemas para ingresar
                </button>
              </h2>
              </div>
                </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body text-white" style="background-color: #EB6E80">
                      Entra a www.fooodseason.com y haz click en el Log in. Luego introduce tu usuario y contraseña. Si no tienes cuenta puedes crearte una, ¡es muy simple!.
                    </div>
                  </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class= "col-xs-10 col-md-6 col-lg-6">
              <div class="accordion" id="accordionExample">
                <div class="card text-white bg-danger mb-3">
                  <div class="card-header"  style="background-color: #E24E42" id="headingFive">
                    <h2 class="mb-0">
                      <i class="fas fa-apple-alt"></i>
                      <br>
                    <button class="btn btn-outline-light" style="background-color: #E24E42"  type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Preferencias del e-mail
                    </button>
                  </h2>
                  </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body" style="background-color: #EB6E80">
                          Food Season esta trabajando para poder ayudarte a solucionarlo.
                      </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="col-xs-10 col-md-6 col-lg-6">
            <div class="card text-white bg-danger mb-3">
              <div class="card-header" style="background-color: #E24E42" id="headingSix">
                <h2 class="mb-0">
                  <i class="fas fa-pizza-slice"></i>
                  <br>
                  <button class="btn btn-outline-light" style="background-color: #E24E42" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Configuracion de la cuenta
                  </button>
                </h2>
          </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                  <div class="card-body" style="background-color: #EB6E80">
                    Food Season te ayudara cuando aprenda a hacerlo.
                  </div>
                </div>
          </div>
        </div>
        <div class="col-xs-10 col-md-6 col-lg-6">
        <div class="accordion" id="accordionExample">
          <div class="card text-white bg-danger mb-3" >
              <div class="card-header" style="background-color: #E24E42" id="headingSeven">
              <h2 class="mb-0">
                <i class="fas fa-cheese"></i>
                <br>
                <button class="btn btn-outline-light"  style="background-color: #E24E42" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    ¿Cómo agrego fotos?
                </button>
              </h2>
            </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                  <div class="card-body" style="background-color: #EB6E80">
                    Food Season te dira luego, sorry.
                  </div>
                </div>
              </div>
          </div>
        </div>
          <div class="col-xs-10 col-md-6 col-lg-6">
            <div class="card text-white bg-danger mb-3">
              <div class="card-header" style="background-color: #E24E42" id="headingEight">
                <h2 class="mb-0">
                  <i class="fas fa-book"></i>
                  <br>
                  <button class="btn btn-outline-light" style="background-color: #E24E42 " type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Compartir recetas
                  </button>
                </h2>
              </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                  <div class="card-body" style="background-color: #EB6E80 " >
                    Food Season tampoco sabe como ayudarte con esto. ¡Ups!
                  </div>
                </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
  </body>
  @endsection
