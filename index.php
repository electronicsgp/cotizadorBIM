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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="./plugins//jquery-3.4.1.min.js"></script>
    <script src="./plugins/materialize/js/materialize.min.js"></script>
    <script src="./plugins/validetta/validetta.js"></script>
    <script src="./plugins/validetta/validetta.min.js"></script>
    <script src="./plugins/validetta/validettaLang-es-ES.js"></script>
    <script src="./plugins/confirm/jquery-confirm.min.js"></script>
    <script src="./js/index.js"></script>
    <style type="text/css">
        P.mipar {text-align: right}
        h5.titulo {text-align: center}
        div.reporte {
            border: 1px solid rgba(78, 75, 75, 0.192);
            margin-top: 50px;
            margin-bottom: 20px;
            margin-right: 70px;
            margin-left: 70px;
            padding: 15px;
            background-color: #6dacf525;
        }
    </style>
    <script type="text/javascript">

        function escribe() {
            escribir = document.getElementById("caja");
            escribir.style.display='block';
            escribir.innerHTML="";

            element = document.getElementById('boton');
            element.style.display='block';

            var edificacion = document.getElementsByName("edificacion");
            var proyectos = document.getElementsByName("acheckbox");
            var accesibilidad = document.getElementsByName("accesibilidad");
            var topografia = document.getElementsByName("topografia");
            var ubicacion = document.getElementsByName("ubicacion");
            var Direccion =  document.getElementsByName("dirUb");
            var Ciudad =  document.getElementsByName("dirCd");
            var Estado =  document.getElementsByName("dirEdo");
            var CP =  document.getElementsByName("dirCp");
            var AreaPB = document.getElementsByName("areaPb");
            var NumeroNiv = document.getElementsByName("numNiv");
            var AreaNiv = document.getElementsByName("areaNp");
            var NumSot = document.getElementsByName("numSot");
            var AreaSot = document.getElementsByName("areaSot");
            var Nombre = document.getElementsByName("nombreCom");
            var Telefono = document.getElementsByName("numTel");
            var Correo = document.getElementsByName("email");



            var Proyecto = new Array();
            var AreaPB, NumeroNiv, AreaNiv, NumSot, AreaSot, Edif1,Edif2,Edif3,Edif4,Edif5,Edif6,Edif7,Edif8,Edif9,Edif10,Edif11,Edif12; 
            var AreaTot,Factura1,Factor2,Factor3,Tab1,Tab2,Tab3,Tab4,Tab5,Tabulador1,Tabulador2,Tabulador3,Tabulador4,Tabulador5,ResTabulador1=0;
            var ResTabulador2=0,ResTabulador3=0,ResTabulador4=0,ResTabulador5=0,ImporteTotal, Importe1, Importe2, Importe3, Importe4, Importe5;

            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");

            for(var i=0; i<edificacion.length; i++) {
                if(edificacion[i].checked == true){
                    Edificacion = edificacion[i].value;
                }
            }

            for(var i=0; i<proyectos.length; i++) {// son varios
                if(proyectos[i].checked == true){
                    //console.log(" Proyecto: " + proyectos[i].value + " i = "+ i);
                    Proyecto.push(proyectos[i].value);
                }
            }

            for(var i=0; i<accesibilidad.length; i++) {
                if(accesibilidad[i].checked == true){
                    Accesibildad = accesibilidad[i].value;
                }
            }

            for(var i=0; i<topografia.length; i++) {
                if(topografia[i].checked == true){
                    Topografia = topografia[i].value;
                }
            }

            for(var i=0; i<ubicacion.length; i++) {
                if(ubicacion[i].checked == true){
                    Ubicacion =  ubicacion[i].value;
                }
            }

            /*Direccion =  document.nuevaE.dirUb.value;
            Ciudad =  document.nuevaE.dirCd.value;
            Estado =  document.nuevaE.dirEdo.value;
            CP =  document.nuevaE.dirCp.value;*/

            //AreaPB = document.nuevaE.areaPb.value;
            AreaPB = parseInt(AreaPB,10);

            //NumeroNiv = document.nuevaE.numNiv.value;
            NumeroNiv = parseInt(NumeroNiv,10);

            //AreaNiv = document.nuevaE.areaNp.value;
            AreaNiv = parseInt(AreaNiv,10);

            //NumSot = document.nuevaE.numSot.value;
            NumSot = parseInt(NumSot,10);

            //AreaSot = document.nuevaE.areaSot.value;
            AreaSot = parseInt(AreaSot,10);
            
            //Nombre = document.nuevaE.nombreCom.value;
            //Telefono = document.nuevaE.numTel.value;
            //Correo = document.nuevaE.email.value;
            
            AreaTot = AreaPB + (AreaNiv * NumeroNiv);

            Factor1 = 0.5;
            Factor2 = 0.7;
            Factor3 = 0.9;

            for(var contador=0; contador < Proyecto.length; contador++ ){
                if(Proyecto[contador] == "Arquitectura"){
                    Tab1=Math.pow(AreaTot,-0.162);
                    TabuladorSub1=(23.41*Tab1)/100;
                    Tabulador1 = TabuladorSub1.toFixed(5);
                    ResTabulador1 = Tabulador1*Factor1;
                }
                else if(Proyecto[contador] == "Estructura"){
                    Tab2=Math.pow(AreaTot,-0.163);
                    TabuladorSub2=(4.2727*Tab2)/100;
                    Tabulador2 = TabuladorSub2.toFixed(5);
                    ResTabulador2 = Tabulador2*Factor1;
                }
                else if(Proyecto[contador] == "Instalalación hidráulica"){
                    Tab3=Math.pow(AreaTot,-0.15);
                    TabuladorSub3=(3.5992*Tab3)/100;
                    Tabulador3 = TabuladorSub3.toFixed(5);
                    ResTabulador3 = Tabulador3*Factor1;
                }
                else if(Proyecto[contador] == "Instalación sanitaria"){
                    Tab4=Math.pow(AreaTot,-0.152);
                    TabuladorSub4=(5.1894*Tab4)/100;
                    Tabulador4 = TabuladorSub4.toFixed(5);
                    ResTabulador4 = Tabulador4*Factor1;
                }
                else if(Proyecto[contador] == "Instalación eléctrica"){
                    Tab5=Math.pow(AreaTot,-0.164);
                    TabuladorSub5=(4.775*Tab5)/100;
                    Tabulador5 =TabuladorSub5.toFixed(5);
                    ResTabulador5 = Tabulador5*Factor1;
                }
            }

            /*if(Proyecto == "arqui"){
                Tab=Math.pow(AreaTot,-0.162);
                Tabulador1=(23.41*Tab)/100;
                Tabulador = Tabulador1.toFixed(5);
            }
            else if(Proyecto == "estructura"){
                Tab=Math.pow(AreaTot,-0.163);
                Tabulador1=(4.2727*Tab)/100;
                Tabulador= Tabulador1.toFixed(5);
            }
            else if(Proyecto == "insHidra"){
                Tab=Math.pow(AreaTot,-0.15);
                Tabulador1=(3.5992*Tab)/100;
                Tabulador = Tabulador1.toFixed(5);
            }
            else if(Proyecto == "insSani"){
                Tab=Math.pow(AreaTot,-0.152);
                Tabulador1=(5.1894*Tab)/100;
                Tabulador = Tabulador1.toFixed(5);
            }
            else if(Proyecto == "insElec"){
                Tab=Math.pow(AreaTot,-0.164);
                Tabulador1=(4.775*Tab)/100;
                Tabulador=Tabulador1.toFixed(5);
            }*/
            
            if(Edificacion == "viviendaFa"){
                Edif1=5206.38;
                Edif="Vivienda Familiar";
                //preguntar cuantos proyectos son//
                //para saber cuantos importes calcular y sacar un gran total//
                Importe1 = Edif1*AreaTot*ResTabulador1*Factor2*Factor3;
                Importe2 = Edif1*AreaTot*ResTabulador2*Factor2*Factor3;
                Importe3 = Edif1*AreaTot*ResTabulador3*Factor2*Factor3;
                Importe4 = Edif1*AreaTot*ResTabulador4*Factor2*Factor3;
                Importe5 = Edif1*AreaTot*ResTabulador5*Factor2*Factor3;

                ImporteTotal = Importe1 + Importe2 + Importe3 + Importe4 + Importe5;
                ImporteTotal =  ImporteTotal.toFixed(2);
            }
            else if(Edificacion == "viviendaAd"){
                Edif2=12432.12;
                Edif="Vivienda Adosada";
                //preguntar cuantos proyectos son//
                //para saber cuantos importes calcular y sacar un gran total//
                Importe1 = Edif2*AreaTot*ResTabulador1*Factor2*Factor3;
                Importe2 = Edif2*AreaTot*ResTabulador2*Factor2*Factor3;
                Importe3 = Edif2*AreaTot*ResTabulador3*Factor2*Factor3;
                Importe4 = Edif2*AreaTot*ResTabulador4*Factor2*Factor3;
                Importe5 = Edif2*AreaTot*ResTabulador5*Factor2*Factor3;

                ImporteTotal= Importe1 + Importe2 + Importe3 + Importe4 + Importe5;
                ImporteTotal =  ImporteTotal.toFixed(2);
            }
            else if(Edificacion== "viviendaFam"){
                Edif3=11576.7;
                Edif="Vivienda Multi Familiar";
                //preguntar cuantos proyectos son//
                //para saber cuantos importes calcular y sacar un gran total//
                Importe1 = Edif3*AreaTot*ResTabulador1*Factor2*Factor3;
                Importe2 = Edif3*AreaTot*ResTabulador2*Factor2*Factor3;
                Importe3 = Edif3*AreaTot*ResTabulador3*Factor2*Factor3;
                Importe4 = Edif3*AreaTot*ResTabulador4*Factor2*Factor3;
                Importe5 = Edif3*AreaTot*ResTabulador5*Factor2*Factor3;

                ImporteTotal= Importe1 + Importe2 + Importe3 + Importe4 + Importe5;
                ImporteTotal =  ImporteTotal.toFixed(2);
            }
            else if(Edificacion == "viviendaRes"){
                Edif4=20241.45;
                Edif="Vivienda Residencial";
                //preguntar cuantos proyectos son//
                //para saber cuantos importes calcular y sacar un gran total//
                Importe1 = Edif4*AreaTot*ResTabulador1*Factor2*Factor3;
                Importe2 = Edif4*AreaTot*ResTabulador2*Factor2*Factor3;
                Importe3 = Edif4*AreaTot*ResTabulador3*Factor2*Factor3;
                Importe4 = Edif4*AreaTot*ResTabulador4*Factor2*Factor3;
                Importe5 = Edif4*AreaTot*ResTabulador5*Factor2*Factor3;

                ImporteTotal= Importe1 + Importe2 + Importe3 + Importe4 + Importe5;
                ImporteTotal =  ImporteTotal.toFixed(2);
            }
            else if(Edificacion == "OfyLocales"){
                Edif5=16263.76;
                Edif="Oficinas y Locales";
                //preguntar cuantos proyectos son//
                //para saber cuantos importes calcular y sacar un gran total//
                Importe1 = Edif5*AreaTot*ResTabulador1*Factor2*Factor3;
                Importe2 = Edif5*AreaTot*ResTabulador2*Factor2*Factor3;
                Importe3 = Edif5*AreaTot*ResTabulador3*Factor2*Factor3;
                Importe4 = Edif5*AreaTot*ResTabulador4*Factor2*Factor3;
                Importe5 = Edif5*AreaTot*ResTabulador5*Factor2*Factor3;

                ImporteTotal= Importe1 + Importe2 + Importe3 + Importe4 + Importe5;
                ImporteTotal =  ImporteTotal.toFixed(2);
            }
            else if(Edificacion == "comercial"){
                Edif6=14119.76;
                Edif="Comercial";
                //preguntar cuantos proyectos son//
                //para saber cuantos importes calcular y sacar un gran total//
                Importe1 = Edif6*AreaTot*ResTabulador1*Factor2*Factor3;
                Importe2 = Edif6*AreaTot*ResTabulador2*Factor2*Factor3;
                Importe3 = Edif6*AreaTot*ResTabulador3*Factor2*Factor3;
                Importe4 = Edif6*AreaTot*ResTabulador4*Factor2*Factor3;
                Importe5 = Edif6*AreaTot*ResTabulador5*Factor2*Factor3;

                ImporteTotal= Importe1 + Importe2 + Importe3 + Importe4 + Importe5;
                ImporteTotal =  ImporteTotal.toFixed(2);
            }
            else if(Edificacion == "administrativo"){
                Edif7=22000;
                Edif="Administrativo";
                //preguntar cuantos proyectos son//
                //para saber cuantos importes calcular y sacar un gran total//
                Importe1 = Edif7*AreaTot*ResTabulador1*Factor2*Factor3;
                Importe2 = Edif7*AreaTot*ResTabulador2*Factor2*Factor3;
                Importe3 = Edif7*AreaTot*ResTabulador3*Factor2*Factor3;
                Importe4 = Edif7*AreaTot*ResTabulador4*Factor2*Factor3;
                Importe5 = Edif7*AreaTot*ResTabulador5*Factor2*Factor3;

                ImporteTotal= Importe1 + Importe2 + Importe3 + Importe4 + Importe5;
                ImporteTotal =  ImporteTotal.toFixed(2);
            }
            else if(Edificacion == "estacionamientos"){
                Edif8=6206.63;
                Edif="Estacionamiento";
                //preguntar cuantos proyectos son//
                //para saber cuantos importes calcular y sacar un gran total//
                Importe1 = Edif8*AreaTot*ResTabulador1*Factor2*Factor3;
                Importe2 = Edif8*AreaTot*ResTabulador2*Factor2*Factor3;
                Importe3 = Edif8*AreaTot*ResTabulador3*Factor2*Factor3;
                Importe4 = Edif8*AreaTot*ResTabulador4*Factor2*Factor3;
                Importe5 = Edif8*AreaTot*ResTabulador5*Factor2*Factor3;

                ImporteTotal= Importe1 + Importe2 + Importe3 + Importe4 + Importe5;
                ImporteTotal =  ImporteTotal.toFixed(2);
            }
            else if(Edificacion == "publicaCon"){
                Edif9=13162.54;
                Edif="Pública Concurrencia";
                //preguntar cuantos proyectos son//
                //para saber cuantos importes calcular y sacar un gran total//
                Importe1 =  Edif9*AreaTot*ResTabulador1*Factor2*Factor3;
                Importe2 =  Edif9*AreaTot*ResTabulador2*Factor2*Factor3;
                Importe3 =  Edif9*AreaTot*ResTabulador3*Factor2*Factor3;
                Importe4 =  Edif9*AreaTot*ResTabulador4*Factor2*Factor3;
                Importe5 =  Edif9*AreaTot*ResTabulador5*Factor2*Factor3;

                ImporteTotal= Importe1 + Importe2 + Importe3 + Importe4 + Importe5;
                ImporteTotal =  ImporteTotal.toFixed(2);
            }
            else if(Edificacion == "docencia"){
                Edif10=6908.8;
                Edif="Docencia";
                //preguntar cuantos proyectos son//
                //para saber cuantos importes calcular y sacar un gran total//
                Importe1 =  Edif10*AreaTot*ResTabulador1*Factor2*Factor3;
                Importe2 =  Edif10*AreaTot*ResTabulador2*Factor2*Factor3;
                Importe3 =  Edif10*AreaTot*ResTabulador3*Factor2*Factor3;
                Importe4 =  Edif10*AreaTot*ResTabulador4*Factor2*Factor3;
                Importe5 =  Edif10*AreaTot*ResTabulador5*Factor2*Factor3;

                ImporteTotal= Importe1 + Importe2 + Importe3 + Importe4 + Importe5;
                ImporteTotal =  ImporteTotal.toFixed(2);
            }
            else if(Edificacion == "salud"){
                Edif11=25000;
                Edif="Salud";
                //preguntar cuantos proyectos son//
                //para saber cuantos importes calcular y sacar un gran total//
                Importe1 =  Edif11*AreaTot*ResTabulador1*Factor2*Factor3;
                Importe2 =  Edif11*AreaTot*ResTabulador2*Factor2*Factor3;
                Importe3 =  Edif11*AreaTot*ResTabulador3*Factor2*Factor3;
                Importe4 =  Edif11*AreaTot*ResTabulador4*Factor2*Factor3;
                Importe5 =  Edif11*AreaTot*ResTabulador5*Factor2*Factor3;

                ImporteTotal= Importe1 + Importe2 + Importe3 + Importe4 + Importe5;
                ImporteTotal =  ImporteTotal.toFixed(2);
            }
            else if(Edificacion == "industrial"){
                Edif12=5269.43;
                Edif="Industrial";
                //preguntar cuantos proyectos son//
                //para saber cuantos importes calcular y sacar un gran total//
                Importe1 =  Edif12*AreaTot*ResTabulador1*Factor2*Factor3;
                Importe2 =  Edif12*AreaTot*ResTabulador2*Factor2*Factor3;
                Importe3 =  Edif12*AreaTot*ResTabulador3*Factor2*Factor3;
                Importe4 =  Edif12*AreaTot*ResTabulador4*Factor2*Factor3;
                Importe5 =  Edif12*AreaTot*ResTabulador5*Factor2*Factor3;

                ImporteTotal = Importe1 + Importe2 + Importe3 + Importe4 + Importe5;
                ImporteTotal =  ImporteTotal.toFixed(2);
            }
            
            Titulo = "<h5 class='titulo'>"+"Horizonte BIM"+"</h5>";
            var f = new Date();
            Fecha = "<p class='mipar'> "+ diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear() + "</p>";
            if (Proyecto.length == 1){
                Texto = "<div>"+"Por este conducto, presentamos a su consideración, nuestra propuesta para la elaboración del proyecto " + Proyecto[0] + " de tipo " + Edif + "en"+ Ciudad +", con un área total de "+ AreaTot + " m2." +"</div>";
                Texto2 = "<div><b>"+"El importe de la presente propuesta es de $"+ ImporteTotal +", sin incluir el I. V. A." + "</b></div>";

                escribir.innerHTML += Titulo + Fecha + Texto + Texto2;

            }else if (Proyecto.length == 2){
                Texto = "<div>"+"Por este conducto, presentamos a su consideración, nuestra propuesta para la elaboración de los proyectos " + Proyecto[0] + ", " + Proyecto[1] + " de tipo " + Edif + " en "+ Ciudad +", con un área total de "+ AreaTot + " m2." +"</div>";
                Texto2  = "<div>"+"\t-El importe del proyecto de " + Proyecto[0] + " es de $" + Importe1.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto3  = "<div>"+"\t-El importe del proyecto de " + Proyecto[1] + " es de $" + Importe2.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto4  = "<div><b>"+"Por lo que el importe total de la presente propuesta es de $"+ ImporteTotal +", sin incluir el I. V. A." + "</b<</div>";

                escribir.innerHTML += Titulo + Fecha + Texto + Texto2 + Texto3 + Texto4;

            }else if (Proyecto.length == 3){
                Texto = "<div>"+"Por este conducto, presentamos a su consideración, nuestra propuesta para la elaboración de los proyectos " + Proyecto[0] + ", " + Proyecto[1] + ", " + Proyecto[2] + " de tipo " + Edif + " en "+ Ciudad +", con un área total de "+ AreaTot + " m2." +"</div>";
                Texto2  = "<div>"+"\t-El importe del proyecto de " + Proyecto[0] + " es de $" + Importe1.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto3  = "<div>"+"\t-El importe del proyecto de " + Proyecto[1] + " es de $" + Importe2.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto4  = "<div>"+"\t-El importe del proyecto de " + Proyecto[2] + " es de $" + Importe3.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto5  = "<div><b>"+"Por lo que el importe total de la presente propuesta es de $"+ ImporteTotal +", sin incluir el I. V. A." + "</b></div>";

                escribir.innerHTML += Titulo + Fecha + Texto + Texto2 + Texto3 + Texto4 + Texto5;

            }else if (Proyecto.length == 4){
                Texto = "<div>"+"Por este conducto, presentamos a su consideración, nuestra propuesta para la elaboración de los proyectos " + Proyecto[0] + ", " + Proyecto[1] + ", " + Proyecto[2] + ", " + Proyecto[3] +" de tipo " + Edif + " en "+ Ciudad +", con un área total de "+ AreaTot + " m2." +"</div>";
                Texto2  = "<div>"+"\t-El importe del proyecto de " + Proyecto[0] + " es de $" + Importe1.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto3  = "<div>"+"\t-El importe del proyecto de " + Proyecto[1] + " es de $" + Importe2.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto4  = "<div>"+"\t-El importe del proyecto de " + Proyecto[2] + " es de $" + Importe3.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto5  = "<div>"+"\t-El importe del proyecto de " + Proyecto[3] + " es de $" + Importe4.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto6  = "<div><b>"+"Por lo que el importe total de la presente propuesta es de $"+ ImporteTotal +", sin incluir el I. V. A." + "</b></div>";

                escribir.innerHTML += Titulo + Fecha + Texto + Texto2 + Texto3 + Texto4 + Texto5 + Texto6;

            }else {
                Texto = "<div>"+"Por este conducto, presentamos a su consideración, nuestra propuesta para la elaboración de los proyectos " + Proyecto[0] + ", " + Proyecto[1] + ", " + Proyecto[2] + ", " + Proyecto[3] + ", " + Proyecto[4] +" de tipo " + Edif + " en "+ Ciudad +", con un área total de "+ AreaTot + " m2." +"</div>";
                Texto2  = "<div>"+"     -El importe del proyecto de " + Proyecto[0] + " es de $" + Importe1.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto3  = "<div>"+"     -El importe del proyecto de " + Proyecto[1] + " es de $" + Importe2.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto4  = "<div>"+"     -El importe del proyecto de " + Proyecto[2] + " es de $" + Importe3.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto5  = "<div>"+"     -El importe del proyecto de " + Proyecto[3] + " es de $" + Importe4.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto6  = "<div>"+"     -El importe del proyecto de " + Proyecto[4] + " es de $" + Importe5.toFixed(2); + ", sin incluir el I. V. A." + "</div>";
                Texto7  = "<div><b>"+"Por lo que el importe total de la presente propuesta es de $"+ ImporteTotal +", sin incluir el I. V. A." + "</b></div>";

                escribir.innerHTML += Titulo + Fecha + Texto + Texto2 + Texto3 + Texto4 + Texto5 + Texto6 + Texto7;

            }

            
            //escribir.innerHTML += Edificacion + Ubicacion + Ciudad + Estado + CP + AreaPB + NumeroNiv + AreaNiv +  NumSot + AreaSot + Accesibilidad + Topografia + Ubicacion
            //escribir.innerHTML = ImporteTotal
            //console.log("Importe:" + Importe);
        } 
    </script>
    <script>
        /*function pruebaDivAPdf() {
            var pdf = new jsPDF();
            doc.setFontSize('25')
            doc.setFont('times')
            doc.setFontType('italic')
            doc.text(40, 15, 'Ing. Moisés Barrientos Lozano')   
        }*/

        /*function pruebaDivAPdf() {
            var pdf = new jsPDF('p', 'pt', 'letter');
            source = $('#caja')[0];

            specialElementHandlers = {
                '#bypassme': function (element, renderer) {
                    return true
                }
            };
            margins = {
                top: 80,
                bottom: 60,
                left: 40,
                width: 522
            };

            pdf.fromHTML(
                source, 
                margins.left, // x coord
                margins.top, { // y coord
                    'width': margins.width, 
                    'elementHandlers': specialElementHandlers
                },

                function (dispose) {
                    pdf.save('Prueba.pdf');
                }, margins
            );
        }*/
        function pruebaDivAPdf() {
            alert("Al descargar su cotización el personal de Horizonte BIM podrá contactarlo por algún medio registrado, Gracias.");
            var doc = new jsPDF();
            var elementHTML = $('#caja').html();
            var specialElementHandlers = {
                '#elementH': function (element, renderer) {
                    return true;
                }
            };
            doc.fromHTML(elementHTML, 15, 15, {
                'width': 170,
                'elementHandlers': specialElementHandlers
            });

            // Save the PDF
            doc.save('document.pdf');
        }
    </script>

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
                                        <input value="viviendaFam" name="edificacion" type="radio"/>
                                        <span>Vivienda Multifamiliar</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input value="viviendaRes" name="edificacion" type="radio"/>
                                        <span>Vivienda Residencial</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input value="OfyLocales" name="edificacion" type="radio"/>
                                        <span>Oficinas y Locales</span>
                                    </label>

                                        <br>
                                        <label>
                                    <input value="comercial" name="edificacion" type="radio"/>
                                    <span>Comercial</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input value="administrativo" name="edificacion" type="radio"/>
                                        <span>Administrativo</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input value="estacionamientos" name="edificacion" type="radio"/>
                                        <span>Estacionamientos</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input value="publicaCon" name="edificacion" type="radio"/>
                                        <span>Pública concurrencia</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input value="docencia" name="edificacion" type="radio"/>
                                        <span>Docencia</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input value="salud" name="edificacion" type="radio"/>
                                        <span>Salud</span>
                                    </label>
                                        <br>
                                        <label>
                                        <input  value="industrial" name="edificacion" type="radio" data-validetta="required"/>
                                        <span>Industrial</span>
                                    </label>

                                    </div>
                                    <div class="col s12 m6 l6">
                                        <h6><i class="fas fa-tasks"></i> Proyectos y/o Estudios:</h6>
                                        <div class="divider col s12"></div><br>
                                        <label>
                                              <input type="checkbox" name="acheckbox[]" value="Arquitectura" data-validetta="minChecked[1]"/>
                                              <span>Arquitectura</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input type="checkbox" name="acheckbox[]" value="Estructura" data-validetta="minChecked[1]"/>
                                              <span>Estructura</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input type="checkbox" name="acheckbox[]" value="Instalalación hidráulica" data-validetta="minChecked[1]"/>
                                              <span>Instalalación hidráulica</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input type="checkbox" name="acheckbox[]" value="Instalación sanitaria" data-validetta="minChecked[1]"/>
                                              <span> Instalación sanitaria </span>
                                            </label>
                                        <br>
                                        <label>
                                              <input type="checkbox" name="acheckbox[]" value="Instalación eléctrica" data-validetta="minChecked[1]"/>
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

                                        <input placeholder="Calle 6 No. 517, Col." id="dirUb" name="dirUb" type="text" data-validetta="required">
                                        <label for="dirCa"><i class="fas fa-map-marker-alt"></i> Ubicación del proyecto</label>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <label><i class="fas fa-map-marker-alt"></i> Estado</label>
                                        <select id="jmr_contacto_estado" class="browser-default" data-validetta="required" name="dirEdo">
                                          <option value="" >Selecciona Estado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6 l6">
                                        <label><i class="fas fa-map-marker-alt"></i> Ciudad o Municipio</label>
                                        <select id="jmr_contacto_municipio" class="browser-default" data-validetta="required" name="dirCd">
                                          <option value="" >Selecciona una opci&oacute;n</option>
                                        </select>
                                    </div>

                                    <div class="input-field col s12 m6 l6">
                                        <input placeholder="02501" id="dirCp" type="text" data-validetta="number,required" name="dirCp">
                                        <label for="first_name"><i class="fas fa-map-marker-alt"></i> C.P./Codigo Postal</label>
                                    </div>
                                </div>
                                <h6><i class="fas fa-ruler-combined"></i> Areas del proyecto</h6>
                                <div class="divider col s12"></div><br>
                                <div class="row">
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="Introduce el area en m2" id="areaPb" name="areaPb" type="text" data-validetta="number,required">
                                        <label for="first_name"><i class="fas fa-ruler-combined"></i> Área de planta baja (m2)</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="2" id="first_name" id="numNiv" name="numNiv" type="text" data-validetta="number,required">
                                        <label for="first_name"><i class="fas fa-kaaba"></i> Número de niveles tipo</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="03400" id="first_name" id="areaNp" name="areaNp" type="text" data-validetta="number,required">
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
                                        <input placeholder="Introduce el número de sótanos" type="text" id="Nnums" name="numSot">
                                        <label for=""><i class="fas fa-dumpster"></i> Número de sótanos</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6">
                                        <input placeholder="100" type="text" id="Nareas" name="areaSot">
                                        <label for=""><i class="fas fa-ruler-combined"></i> Área de sótano (m2)</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m4 l4">
                                        <h6><i class="fas fa-street-view"></i> Accesibilidad</h6>
                                        <div class="divider"></div>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value="Mbuena"/>
                                              <span>Muy Buena</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value="buena"/>
                                              <span> Buena</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value="normal"/>
                                              <span>Normal</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value="dificil"/>
                                              <span>Dificil</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="accesibilidad" type="radio" value="Mdificil" data-validetta="required"/>
                                              <span>Muy dificil</span>
                                            </label>

                                    </div>
                                    <div class="col s12 m4 l4">
                                        <h6><i class="fas fa-road"></i> Topografia</h6>
                                        <div class="divider"></div>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value="plana"/>
                                              <span>Plana</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value="desnivelMin"/>
                                              <span>Con desnivel minimo</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value="desnivelPron"/>
                                              <span>Con desnivel pronunciado</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value="accidentada"/>
                                              <span>Accidentada</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="topografia" type="radio" value="Maccidentada" data-validetta="required"/>
                                              <span>Muy accidentada</span>
                                            </label>
                                    </div>
                                    <div class="col s12 l4 m4">
                                        <h6><i class="fas fa-map-marked-alt"></i> Ubicación</h6>
                                        <div class="divider"></div>
                                        <br>
                                        <label>
                                              <input name="ubicacion" type="radio" value="colindancias"/>
                                              <span>Entre colindacias</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="ubicacion" type="radio" value="esquina"/>
                                              <span>En esquina</span>
                                            </label>
                                        <br>
                                        <label>
                                              <input name="ubicacion" type="radio" value="aislada" data-validetta="required"/>
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
                                        <input placeholder="Francisco Martinez Del Campo" id="nombreCom" name="nombreCom" type="text" data-validetta="required">
                                        <label for="first_name"><i class="fas fa-user"></i> Nombre Completo</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="+1 3004005000" id="numTel" name="numTel" type="text" data-validetta="number,required">
                                        <label for="first_name"><i class="fas fa-mobile"></i> Número de telefono</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4">
                                        <input placeholder="Evangeline@ray.com" id="email" name="email" type="text" data-validetta="required,email">
                                        <label for="100"><i class="fas fa-at"></i> Correo Electrónico</label>
                                    </div>
                                </div>
                                <button class="btn waves-effect waves-light" type="submit" name="action" onclick="escribe();">Enviar
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
            <div id="caja" class="reporte" style="display: none;">
            </div>
            <div id="elementH">
                <p><button type="sumbit" id="boton" style="display: none;" class="titulo"><a href="javascript:pruebaDivAPdf()" class="button">Descargar Cotización</a></button></p>
            </div>
        </div>
    </main>
    <footer class="page-footer">

    <div class="container center-align">
            Copyright © PGP Developer 2021 
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