<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/TecNNM.png')}} " />
    <link rel="icon" type="image/png" href="{{asset('img/logo-tecmotul22.png')}} " />
    <title>Hackathon - Registro</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!--     Fonts and icons     -->
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link href="{{ asset('registroAssets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('registroAssets/css/gsdk-bootstrap-wizard.css')}}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('registroAssets/css/demo.css')}}" rel="stylesheet" />
        <link href="{{ asset('css/registro.css')}}" rel="stylesheet" />
    <script src="{{asset('/js/validar-password.js')}}" type="text/javascript"></script>
    <style>
        
    </style>

</head>

<body>
    <div class="image-container set-full-height"
        style="background-image: url('{{ asset('loginAsset/images/isc_bg2.jpg') }}">
        <!--   Big container   -->
        <div class="container">
            <div style="padding-top:0;" class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <!--      Wizard container        -->
                    <div style="padding:1em; " class="wizard-container">

                        <div class="card wizard-card " data-color="blue" id="wizardProfile">
                            <form name="mi_formulario" action="{{ route('registro.store') }}" method="POST"
                                enctype="multipart/form-data" onSubmit="return validar_clave()">
                                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->
                                @csrf
                                <div class="wizard-header text-white">
                                    <h3>
                                        <b>REGISTRATE</b> AL HACKATHON <br>
                                        <small>Esta información nos servirá para...</small>
                                    </h3>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#about" data-toggle="tab">información básica</a></li>
                                        <li><a href="#account" data-toggle="tab">Rol</a></li>
                                        <li><a href="#address" data-toggle="tab">información adicional</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content text-white">
                                    <div class="tab-pane" id="about">
                                        <div class="row">
                                            <h4 class="info-text"> Lo primero es registrar tu información básica :)</h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="{{ asset('registroAssets/img/default-avatar.png')}}"
                                                            class="picture-src" id="wizardPicturePreview" title="" />
                                                        <input name="avatar" type="file" id="wizard-picture" required>

                                         <script src="{{asset('js/validar_foto.js')}}" type="text/javascript"></script>



                                                    </div>
                                                    <h6>Elige tu foto de perfil</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Nombre<small>(obligatorio)</small></label>
                                                    <input id="name" name="name" type="text" class="input100"
                                                        placeholder="Sergio..." required maxlength="20"
                                                        autocomplete="off">
                                                    <small>Solo el primer nombre</small>
                                         <script src="{{asset('js/eliminar_espacios.js')}}" type="text/javascript"></script>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Apellidos<small>(obligatorio)</small></label>
                                                    <input name="lastName" type="text" class="input100"
                                                        placeholder="Eb..." required maxlength="20" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group ">
                                                    <label>Matricula <small>(obligatorio)</small></label>
                                                    <input id="matricula" onKeyPress="return soloNumeros(event)"
                                                        name="matricula" type="text" class="input100"
                                                        placeholder="160700.." maxlength="8" required
                                                        autocomplete="off">



                                                </div>
                                    <script src="{{asset('js/solo_numeros.js')}}" type="text/javascript"></script>
                                                <div class="form-group">
                                                    <label>Correo <small>(obligatorio)</small></label>
                                                    <div class="input-group">
                                                        <input
                                                            style="border-top-right-radius: 0; border-bottom-right-radius: 0;"
                                                            id="email" type="text" class="input100" name="email"
                                                            placeholder="sergio.16070021">
                                                        <span style=""
                                                            class="input-group-addon input100-addon">@itsmotul.edu.mx</span>
                                                    </div>
                                                    <small>Verifica si tu correo es correcto</small>
                                                </div>
                                                  <script>

                                                    $("#email").keyup(function(){              
                                                            var ta      =   $("#email");
                                                            letras      =   ta.val().replace(/@/g, "");
                                                            ta.val(letras)
                                                    }); 
                                                    $("#email").keyup(function(){              
                                                            var ta      =   $("#email");
                                                            letras      =   ta.val().replace(/ /g, "");
                                                            ta.val(letras)
                                                    }); 

                                                </script>
                                   <script src="{{asset('js/autocompleto_email.js')}}" type="text/javascript"></script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <h4 class="info-text"> ¿Cual es tu rol en el equipo? </h4>
                                        <div class="row">

                                            </script>
                                            <div class="col-sm-15 col-sm-offset-1">
                                                <div style="padding:0;" class="col-sm-2">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="rol" value="Documentador">
                                                        <div class="icon">
                                                            <i class="fa fa-book"></i>
                                                        </div>
                                                        <h6>Documentador</h6>
                                                    </div>
                                                </div>
                                                <div style="padding:0; margin-left:1em;" class="col-sm-2">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="rol" value="Programador">
                                                        <div class="icon">
                                                            <i class="fa fa-code"></i>
                                                        </div>
                                                        <h6>Programador</h6>
                                                    </div>
                                                </div>
                                                 <div style="padding:0; margin-left:1em;" class="col-sm-2">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="rol" value="uxd">
                                                        <div class="icon">
                                                            <i class="fa fa-magic"></i>
                                                        </div>
                                                        <h6>UXD</h6>
                                                    </div>
                                                </div>
                                                <div style="padding:0; margin-left:1em;" class="col-sm-2">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="rol" value="arq.Hardware">
                                                        <div class="icon">
                                                            <i class="fa fa-cogs"></i>
                                                        </div>
                                                        <h6>Arquitecto de Hardware</h6>
                                                    </div>
                                                </div>
                                                <div style="padding:0; margin-left:1em;" class="col-sm-2">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="rol" value="Expositor">
                                                        <div class="icon">
                                                            <i class="fa fa-microphone"></i> </div>
                                                        <h6>Expositor</h6>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-9">
                                                        <label>Nombre de Equipo</label>
                                                        <input name="equipoName" type="text" class="input100"
                                                            placeholder="buena maravilla onda dinamita escuadrón lobo"
                                                            required maxlength="20">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label># equipo</label>
                                                        <select name="equipoNumber" class="input1002">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value=11>11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Ultimos datos :) </h4>
                                            </div>
                                            <div class="col-sm-7 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Carrera</label>
                                                    <select name="carrera" class="input100">
                                                        <option value="Ingeniería en Sistemas">Ingeniería en Sistemas
                                                        </option>
                                                        <option value="Ingeniería Industrial"> Ingeniería Industrial
                                                        </option>
                                                        <option value="Ingeniería Electromecánica"> Ingeniería
                                                            Electromecánica </option>
                                                        <option value="Ingeniería Renovables"> Ingeniería Renovables
                                                        </option>
                                                        <option value="Ingeniería Electrónica"> Ingeniería Electrónica
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Semestre</label>
                                                    <select name="semestre" class="input1002">
                                                        <option value="1er Semestre">1er Semestre</option>
                                                        <option value="2do Semestre"> 2do Semestre</option>
                                                        <option value="3er Semestre"> 3er Semestre </option>
                                                        <option value="4to Semestre"> 4to Semestre </option>
                                                        <option value="5to Semestre"> 5to Semestre </option>
                                                        <option value="6to Semestre"> 6to Semestre </option>
                                                        <option value="7mo Semestre"> 7mo Semestre </option>
                                                        <option value="8vo Semestre"> 8vo Semestre </option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group row">
                                                    <label for="password"
                                                        class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                    <div class="col-md-12">
                                                        <input id="password" type="password"
                                                            class="input100 form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="new-password">

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group row">
                                                    <label for="password-confirm"
                                                        class="col-md-6 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                    <div class="col-md-12">
                                                        <input id="password-confirm" type="password"
                                                            class="input100 form-control" name="password_confirmation"
                                                            required autocomplete="new-password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer height-wizard">
                                    <div class="pull-right">
                                        <input onclick="validar_foto()" type='button'
                                            class='btn btn-next btn-fill button-hackathn' name='next'
                                            value='Siguiente' />
                                        <input type='submit' class='btn btn-finish btn-fill button-hackathn'
                                            name='finish' value='Finalizar' />

                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill button-hackathn'
                                            name='previous' value='Volver' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->

    </div>




</body>

<!--   Core JS Files   -->
<script src="{{asset('registroAssets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('registroAssets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('registroAssets/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
<script src="{{asset('registroAssets/js/gsdk-bootstrap-wizard.js')}}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->

<script src="{{asset('registroAssets/js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
<script src="{{asset('registroAssets/js/jquery.validate.min.js')}}" type="text/javascript"></script>

</html>
