<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Cotizador BIM</title>
    <meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no' />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="./images/logo.jpeg" rel="icon">
    <link href="./images/logo.jpeg" rel="apple-touch-icon">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="./plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./plugins/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="./plugins/validetta/validetta.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

    <link href="./css/general.css" rel="stylesheet">
    <script src="./plugins//jquery-3.4.1.min.js"></script>
    <script src="./plugins/materialize/js/materialize.min.js"></script>
    <script src="./plugins/validetta/validetta.js"></script>
    <script src="./plugins/validetta/validetta.min.js"></script>
    <script src="./plugins/validetta/validettaLang-es-ES.js"></script>
    <script src="./plugins/confirm/jquery-confirm.min.js"></script>
    <script src="./js/index.js"></script>


</head>

<body>
    <header>
        <nav class="nav-extended">
            <div class="nav-wrapper">

                <a href="#!" class="brand-logo center"><img src="./images/logo.jpeg" alt="" class="responsive-img"></a>
            </div>
            <div class="nav-content center">
                <span class="nav-title">Cotizador BIM</span>
            </div>

        </nav>

    </header>
    <main class="valign-wrapper">
        <div class="container">
            <div id="alert"></div>


            <div class="row">
                <div class="col s12 m12 l12">
                    <ul class="tabs">
                        <li class="tab col s6 m6 l6 "><a class="active " href="#New" c>EDIFICACION NUEVA</a></li>
                        <li class="tab col s6 m6 l6"><a href="#Exis">EDIFICACION EXISTENTE</a></li>

                    </ul>

                </div>


            </div>
            <div id="New" class="col s12">
                <form action="" id="nuevaE">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header"><i class="fas fa-building "></i>Tipo de Edificacion</div>
                            <div class="collapsible-body">
                                <div class="row">
                                    <div class="col s12 m6 l6">
                                        <h6><i class="fas fa-hard-hat"></i> Edificación #</h6>
                                        <div class="divider col s12"></div><br>
                                        <label>
                                        <input value="viviendaFa" name="edificacion" type="radio"/>
                                        <span>Vivienda Familiar</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input value="viviendaAd" name="edificacion" type="radio"/>
                                        <span> Vivienda Adosada</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input name="edificacion" type="radio"/>
                                        <span>Vivienda Multifamiliar</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input name="edificacion" type="radio"/>
                                        <span>Vivienda Residencial</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input name="edificacion" type="radio"/>
                                        <span>Oficinas y Locales</span>
                                    </label>

                                        <br>
                                        <label>
                                    <input name="edificacion" type="radio"/>
                                    <span>Comercial</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input name="edificacion" type="radio"/>
                                        <span>Administrativo</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input name="edificacion" type="radio"/>
                                        <span>Estacionamientos</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input name="edificacion" type="radio"/>
                                        <span>Pública concurrencia</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input name="edificacion" type="radio"/>
                                        <span>Docencia</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input name="edificacion" type="radio"/>
                                        <span>Salud</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input  name="edificacion" type="radio" data-validetta="required"/>
                                        <span>Industrial</span>
                                    </label>

                                    </div>
                                    <div class="col s12 m6 l6">
                                        <h6><i class="fas fa-tasks"></i> Proyectos y/o Estudios:</h6>
                                        <div class="divider col s12"></div><br>
                                        <label>
                                              <input type="checkbox" name="acheckbox[]" value="arqui" data-validetta="minChecked[1]"/>
                                              <span>Arquitectura</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input type="checkbox" name="acheckbox[]" value="estructura" data-validetta="minChecked[1]"/>
                                              <span>Estructura</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input type="checkbox" name="acheckbox[]" value="insHidra" data-validetta="minChecked[1]"/>
                                              <span>Instalalación hidráulica</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input type="checkbox" name="acheckbox[]" value="insSani" data-validetta="minChecked[1]"/>
                                              <span> Instalación sanitaria </span>
                                            </label>
                                        <br>
                                        <label>
                                              <input type="checkbox" name="acheckbox[]" value="insElec" data-validetta="minChecked[1]"/>
                                              <span>Instalación eléctrica</span>
                                            </label>
                                        <br>
                                        <!-- USO PENDIENTE
                                        <label>
                                              <input type="checkbox" name="acheckbox[]" value="mecanica" data-validetta="minChecked[1]"/>
                                              <span> Mecánica de suelos</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input type="checkbox" name="acheckbox[]" value="cambioSuelo" data-validetta="minChecked[1]"/>
                                              <span> Cambio de uso de suelo</span>
                                            </label>-->
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="fas fa-clipboard-check"></i>Datos del proyecto</div>
                            <div class="collapsible-body">
                                <div class="row">
                                    <div class="input-field col s12 m6 l6">

                                        <input placeholder="Calle 6 No. 517, Col." id="dirCa" type="text" data-validetta="required">
                                        <label for="dirCa"><i class="fas fa-map-marker-alt"></i> Ubicación del proyecto</label>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <label><i class="fas fa-map-marker-alt"></i> Estado</label>
                                        <select id="jmr_contacto_estado" class="browser-default" data-validetta="required">
                                          <option value="" >Selecciona Estado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6 l6">
                                        <label><i class="fas fa-map-marker-alt"></i> Ciudad o Municipio</label>
                                        <select id="jmr_contacto_municipio" class="browser-default" data-validetta="required">
                                          <option value="" >Selecciona una opci&oacute;n</option>
                                        </select>
                                    </div>

                                    <div class="input-field col s12 m6 l6">
                                        <input placeholder="02501" id="dirCp" type="text" data-validetta="number,required">
                                        <label for="first_name"><i class="fas fa-map-marker-alt"></i> C.P./Codigo Postal</label>
                                    </div>
                                </div>
                                <h6><i class="fas fa-ruler-combined"></i> Areas del proyecto</h6>
                                <div class="divider col s12"></div><br>
                                <div class="row">
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="Introduce el area en m2" id="areaPb" type="text" data-validetta="number,required">
                                        <label for="first_name"><i class="fas fa-ruler-combined"></i> Área de planta baja (m2)</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="2" id="first_name" id="numNiv" type="text" data-validetta="number,required">
                                        <label for="first_name"><i class="fas fa-kaaba"></i> Número de niveles tipo</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="03400" id="first_name" id="areaNp" type="text" data-validetta="number,required">
                                        <label for="100"><i class="fas fa-ruler-combined"></i> Área del nivel tipo (m2)</label>
                                    </div>
                                </div>
                                <h6 style="display: inline;"><i class="fas fa-ruler-combined"></i> Sotanos</h6>
                                <label>
                                    &nbsp;
                                    <input type="checkbox" id="Nsot" value="1" onchange="javascript:showNsota()" />
                                    <span> </span>
                                </label>

                                <div class="divider col s12"></div><br>
                                <div class="row" id="Ndisps" style="display: none;">
                                    <div class="input-field col s12 m6 l6">
                                        <input placeholder="Introduce el número de sótanos" type="text" id="Nnums">
                                        <label for=""><i class="fas fa-dumpster"></i> Número de sótanos</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6">
                                        <input placeholder="100" type="text" id="Nareas">
                                        <label for=""><i class="fas fa-ruler-combined"></i> Área de sótano (m2)</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m4 l4">
                                        <h6><i class="fas fa-street-view"></i> Accesibilidad</h6>
                                        <div class="divider"></div>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value=""/>
                                              <span>Muy Buena</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value=""/>
                                              <span> Buena</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value=""/>
                                              <span>Normal</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value=""/>
                                              <span>Dificil</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value="" data-validetta="required"/>
                                              <span>Muy dificil</span>
                                            </label>

                                    </div>
                                    <div class="col s12 m4 l4">
                                        <h6><i class="fas fa-road"></i> Topografia</h6>
                                        <div class="divider"></div>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value=""/>
                                              <span>Plana</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value=""/>
                                              <span>Con desnivel minimo</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value=""/>
                                              <span>Con desnivel pronunciado</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value=""/>
                                              <span>Accidentada</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value="" data-validetta="required"/>
                                              <span>Muy accidentada</span>
                                            </label>
                                    </div>
                                    <div class="col s12 l4 m4">
                                        <h6><i class="fas fa-map-marked-alt"></i> Ubicación</h6>
                                        <div class="divider"></div>
                                        <br>
                                        <label>
                                              <input name="ubicacion" type="radio" value=""/>
                                              <span>Entre colindacias</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="ubicacion" type="radio" value=""/>
                                              <span>En esquina</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="ubicacion" type="radio" value="" data-validetta="required"/>
                                              <span>Aislada</span>
                                            </label>

                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="fas fa-user-check"></i>Datos del contacto</div>
                            <div class="collapsible-body">
                                <div class="row">
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="Francisco Martinez Del Campo" id="nombreCom" type="text" data-validetta="required">
                                        <label for="first_name"><i class="fas fa-user"></i> Nombre Completo</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="+1 3004005000" id="numTel" type="text" data-validetta="number,required">
                                        <label for="first_name"><i class="fas fa-mobile"></i> Número de telefono</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="Evangeline@ray.com" id="email" type="text" data-validetta="required,email">
                                        <label for="100"><i class="fas fa-at"></i> Correo Electrónico</label>
                                    </div>
                                </div>
                                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                <i class="fas fa-check-double"></i></button>
                            </div>
                        </li>
                    </ul>
                </form>

            </div>
            <div id="Exis" class="col s12">
                <div class = "card-panel center-align">
                <i class="fas fa-cog fa-spin fa-10x"></i>
                <h4 >En construcci&oacute;n</h4>
                </div>
            
                <!-- formulario Exitente
                <form action="" id="exisE">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header"><i class="fas fa-building "></i>Tipo de Edificacion</div>
                            <div class="collapsible-body">
                                <div class="row">
                                    <div class="col s12 m6 l6">
                                        <h6><i class="fas fa-hard-hat"></i> Estado Actual</h6>
                                        <div class="divider col s12"></div><br>
                                        <label>
                                        <input type="checkbox" name="Eacheckbox[]" value="arqui" data-validetta="minChecked[1]"/>
                                        <span>Arquitectura</span>
                                      </label>
                                        <br>
                                        <label>
                                        <input type="checkbox" name="Eacheckbox[]" value="estructura" data-validetta="minChecked[1]"/>
                                        <span>Estructura</span>
                                      </label>
                                        <br>
                                        <label>
                                        <input type="checkbox" name="Eacheckbox[]" value="insHidra" data-validetta="minChecked[1]"/>
                                        <span>Instalalación hidráulica</span>
                                      </label>
                                        <br>
                                        <label>
                                        <input type="checkbox" name="Eacheckbox[]" value="insSani" data-validetta="minChecked[1]"/>
                                        <span> Instalación sanitaria </span>
                                      </label>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <h6><i class="fas fa-tasks"></i> Servicios</h6>
                                        <div class="divider col s12"></div><br>
                                        <label>
                                              <input type="checkbox" name="ESacheckbox[]" value="arqui" data-validetta="minChecked[1]"/>
                                              <span>Reconstrucción</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input type="checkbox" name="ESacheckbox[]" value="estructura" data-validetta="minChecked[1]"/>
                                              <span>Remodelación</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input type="checkbox" name="ESacheckbox[]" value="insHidra" data-validetta="minChecked[1]"/>
                                              <span> Dictamen de seguridad estructural</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input type="checkbox" name="ESacheckbox[]" value="insSani" data-validetta="minChecked[1]"/>
                                              <span> Mecánica de suelos</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input type="checkbox" name="ESacheckbox[]" value="insElec" data-validetta="minChecked[1]"/>
                                              <span> Cambio de uso de suelo</span>
                                            </label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="fas fa-clipboard-check"></i>Datos del proyecto</div>
                            <div class="collapsible-body">
                                <div class="row">
                                    <div class="input-field col s12 m6 l6">

                                        <input placeholder="Calle 6 No. 517, Col." id="dirCa" type="text" data-validetta="required">
                                        <label for="dirCa"><i class="fas fa-map-marker-alt"></i> Ubicación del proyecto</label>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <label><i class="fas fa-map-marker-alt"></i> Estado</label>
                                        <select id="Ejmr_contacto_estado" class="browser-default" data-validetta="required">
                                          <option value="" >Selecciona Estado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6 l6">
                                        <label><i class="fas fa-map-marker-alt"></i> Ciudad o Municipio</label>
                                        <select id="Ejmr_contacto_municipio" class="browser-default" data-validetta="required">
                                          <option value="" >Selecciona una opci&oacute;n</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12 m6 l6">
                                        <input placeholder="02501" id="dirCp" type="text" data-validetta="number,required">
                                        <label for="first_name"><i class="fas fa-map-marker-alt"></i> C.P./Codigo Postal</label>
                                    </div>
                                </div>
                                <h6><i class="fas fa-ruler-combined"></i> Areas del proyecto</h6>
                                <div class="divider col s12"></div><br>
                                <div class="row">
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="Introduce el area en m2" id="areaPb" type="text" data-validetta="number,required">
                                        <label for="first_name"><i class="fas fa-ruler-combined"></i> Área de planta baja (m2)</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="2" id="first_name" id="numNiv" type="text" data-validetta="number,required">
                                        <label for="first_name"><i class="fas fa-kaaba"></i> Número de niveles tipo</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="03400" id="first_name" id="areaNp" type="text" data-validetta="number,required">
                                        <label for="100"><i class="fas fa-ruler-combined"></i> Área del nivel tipo (m2)</label>
                                    </div>
                                </div>
                                <h6 style="display: inline;"><i class="fas fa-ruler-combined"></i> Sotanos</h6>
                                <label>
                                    &nbsp;
                                    <input type="checkbox" id="Esot" value="1" onchange="javascript:showEsota()" />
                                    <span> </span>
                                </label>

                                <div class="divider col s12"></div><br>
                                <div class="row" id="Edisps" style="display: none;">
                                    <div class="input-field col s12 m6 l6">
                                        <input placeholder="Introduce el número de sótanos" type="text" id="Enums">
                                        <label for=""><i class="fas fa-dumpster"></i> Número de sótanos</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6">
                                        <input placeholder="100" type="text" id="Eareas">
                                        <label for=""><i class="fas fa-ruler-combined"></i> Área de sótano (m2)</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m4 l4">
                                        <h6><i class="fas fa-street-view"></i> Accesibilidad</h6>
                                        <div class="divider"></div>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value=""/>
                                              <span>Muy Buena</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value=""/>
                                              <span> Buena</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value=""/>
                                              <span>Normal</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value=""/>
                                              <span>Dificil</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value="" data-validetta="required"/>
                                              <span>Muy dificil</span>
                                            </label>

                                    </div>
                                    <div class="col s12 m4 l4">
                                        <h6><i class="fas fa-road"></i> Topografia</h6>
                                        <div class="divider"></div>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value=""/>
                                              <span>Plana</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value=""/>
                                              <span>Con desnivel minimo</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value=""/>
                                              <span>Con desnivel pronunciado</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value=""/>
                                              <span>Accidentada</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value="" data-validetta="required"/>
                                              <span>Muy accidentada</span>
                                            </label>
                                    </div>
                                    <div class="col s12 l4 m4">
                                        <h6><i class="fas fa-map-marked-alt"></i> Ubicación</h6>
                                        <div class="divider"></div>
                                        <br>
                                        <label>
                                              <input name="ubicacion" type="radio" value=""/>
                                              <span>Entre colindacias</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="ubicacion" type="radio" value=""/>
                                              <span>En esquina</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="ubicacion" type="radio" value="" data-validetta="required"/>
                                              <span>Aislada</span>
                                            </label>

                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="fas fa-user-check"></i>Datos del contacto</div>
                            <div class="collapsible-body">
                                <div class="row">
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="Francisco Martinez Del Campo" id="EnombreCom" type="text" data-validetta="required">
                                        <label for="first_name"><i class="fas fa-user"></i> Nombre Completo</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="+1 3004005000" id="EnumTel" type="text" data-validetta="number,required">
                                        <label for="first_name"><i class="fas fa-mobile"></i> Número de telefono</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="Evangeline@ray.com" id="Eemail" type="text" data-validetta="required,email">
                                        <label for="100"><i class="fas fa-at"></i> Correo Electrónico</label>
                                    </div>
                                </div>
                                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                <i class="fas fa-check-double"></i></button>
                            </div>
                        </li>
                    </ul>
                </form> -->
            </div>
        </div>
    </main>
    <footer class="page-footer">

        <div class="footer-copyright">
            <div class="container">
                © 2021 Copyright
                <a class="grey-text text-lighten-4 right" href="#!">PGP Developer</a>
            </div>
        </div>
    </footer>

</body>

<script>
    M.AutoInit();
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "procesar-estados.php",
            data: {
                estados: "Mexico"
            }
        }).done(function(data) {
            $("#jmr_contacto_estado").html(data);
            $("#Ejmr_contacto_estado").html(data);
        });
        // Obtener municipios
        $("#jmr_contacto_estado").change(function() {
            var estado = $("#jmr_contacto_estado option:selected").val();
            $.ajax({
                type: "POST",
                url: "procesar-estados.php",
                data: {
                    municipios: estado
                }
            }).done(function(data) {
                $("#jmr_contacto_municipio").html(data);
            });
        });
        $("#Ejmr_contacto_estado").change(function() {
            var estado = $("#jmr_contacto_estado option:selected").val();
            $.ajax({
                type: "POST",
                url: "procesar-estados.php",
                data: {
                    municipios: estado
                }
            }).done(function(data) {
                $("#Ejmr_contacto_municipio").html(data);
            });
        });
    })

    function showNsota() {
        element = document.getElementById("Ndisps");
        check = document.getElementById("Nsot");
        let num = document.getElementById("Nnums");
        let area = document.getElementById("Nareas");
        if (check.checked) {
            element.style.display = 'block';
            num.setAttribute("data-validetta", "number,required");
            area.setAttribute("data-validetta", "number,required");
        } else {
            element.style.display = 'none';

            num.setAttribute("data-validetta", "");
            area.setAttribute("data-validetta", "");
        }
    }

    function showEsota() {
        element = document.getElementById("Edisps");
        check = document.getElementById("Esot");
        let num = document.getElementById("Enums");
        let area = document.getElementById("Eareas");
        if (check.checked) {
            element.style.display = 'block';
            num.setAttribute("data-validetta", "number,required");
            area.setAttribute("data-validetta", "number,required");
        } else {
            element.style.display = 'none';

            num.setAttribute("data-validetta", "");
            area.setAttribute("data-validetta", "");
        }
    }
</script>

</html>