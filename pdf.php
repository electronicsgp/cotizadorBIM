<?php

include("./php/fpdf182/fpdf.php");
include_once('CPDF.php');

$nombre= $_POST["nombreC"]; 
$Aproyec=$_POST["acheckbox"];
$current = 0;
 $Stproye='';   
 foreach ($Aproyec as $key => $value) {
     if ($current != count($Aproyec)-1) {
        $Stproye .=$value.', ';
     }
     else
        $Stproye .=$value.' ';
    $current++;
     
 }



$pdf = new PDF();
$pdf->AddPage();
//Margen iniciando en 0, 0
//$pdf->Image('fondo.jpg', 0,0, 210, 295, 'JPG');
 
//De aqui en adelante se colocan distintos métodos
//para diseñar el formato.
 
//Fecha
$pdf->SetFont('Times','', 12);
$pdf->SetXY(130,40);
$pdf->Cell(15, 8, utf8_decode('FECHA'), 0, 'L');//insertar variable de FECHA
 
//Datos
$pdf->SetXY(20, 55);
$pdf->Cell(20, 8, utf8_decode("$nombre"), 0, 'L');//insertar nombre del USUARIO
//*****
$pdf->SetXY(20,61);
$pdf->MultiCell(170,5,utf8_decode("Por  este  conducto,  presentamos  a  su  consideración,  nuestra propuesta  para  la  elaboración del proyecto $Stproye de  casa  habitación  en   con  área  techada  de 795.66 m2.")); //insertar variables de PROYECTOS, EDIFICACION, CIUDAD, MUNICIPIO y AREA TOTAL
//*****
$pdf->SetXY(20, 83);
$pdf->Cell(20, 8, 'OBJETIVO: El objetivo de la presente propuesta: ', 0, 'L');
//***** 
$pdf->SetXY(20, 90);
$pdf->MultiCell(170,5,utf8_decode('Elaborar el proyecto ESTRUCTURAL para construcción, basados en la normatividad aplicable en el municipio/Alcaldía del Estado de México/Cdmx, supletoriamente el Reglamento para Construcciones del Distrito Federal (de la Cd. De México), y el manual para obras civiles de la C.F.E.'));// insertar PROYECTOS, ALCALDIA y ESTADO y ESTADO
//*****
$pdf->SetXY(20, 115);
$pdf->Cell(20, 8, 'Por lo expuesto, presentamos el presupuesto con los siguientes alcances.', 0, 'L');
//*****
$pdf->SetXY(27, 120);
$pdf->Cell(27, 8, utf8_decode('a)   Estructuración conforme a proyecto arquitectónico, sistemas y procedimientos constructivos'), 0, 'L');
$pdf->SetXY(27, 125);
$pdf->Cell(27, 8, utf8_decode('     acordados con el cliente.'), 0, 'L');
$pdf->SetXY(27, 130);
$pdf->Cell(27, 8, utf8_decode('b)     Pre-dimensionamiento de elementos estructurales de cimentación y estructura.'), 0, 'L');
$pdf->SetXY(27, 135);
$pdf->Cell(27, 8, utf8_decode('c)   Análisis estructural para determinar elementos mecánicos a los que serán sometidos los'), 0, 'L');
$pdf->SetXY(27, 140);
$pdf->Cell(27, 8, utf8_decode('       elementos estructurales.'), 0, 'L');
$pdf->SetXY(27, 145);
$pdf->Cell(27, 8, utf8_decode('d)   Diseño de todos y cada uno de los elementos estructurales y de la cimentación'), 0, 'L');
//*****
$pdf->SetXY(20, 155);
$pdf->Cell(20, 8, 'Entregables: ', 0, 'L');
//*****
$pdf->SetXY(27, 160);
$pdf->Cell(27, 8, utf8_decode('a)   Memoria de cálculo.'), 0, 'L');
$pdf->SetXY(27, 165);
$pdf->Cell(27, 8, utf8_decode('b)   Planos en formato 90 x 60 cm.'), 0, 'L');
$pdf->SetXY(27, 170);
$pdf->Cell(27, 8, utf8_decode('c)   Cuantificaciones.'), 0, 'L');
$pdf->SetXY(27, 175);
$pdf->Cell(27, 8, utf8_decode('d)   Catálogo de conceptos y cantidades de obra.'), 0, 'L');
$pdf->SetXY(27, 180);
$pdf->Cell(27, 8, utf8_decode('e)   Mercadeo.'), 0, 'L');
$pdf->SetXY(27, 185);
$pdf->Cell(27, 8, utf8_decode('f)   Integración de Matrices de precios Unitarios.'), 0, 'L');
$pdf->SetXY(27, 190);
$pdf->Cell(27, 8, utf8_decode('e)   Mercadeo.'), 0, 'L');
$pdf->SetXY(27, 195);
$pdf->Cell(27, 8, utf8_decode('f)   Integración de Matrices de precios Unitarios.'), 0, 'L');
$pdf->SetXY(27, 200);
$pdf->Cell(27, 8, utf8_decode('g)   Presupuesto.'), 0, 'L');
$pdf->SetXY(27, 205);
$pdf->Cell(27, 8, utf8_decode('h)   Dos revisiones y ajustes en caso necesario, desde memoria cálculo hasta presupuesto.'), 0, 'L');
//*****
$pdf->SetXY(20, 220);
$pdf->MultiCell(170,5,utf8_decode('El tiempo de ejecución de los trabajos es de 3 semanas a partir de su autorización y pago de anticipo.'));
$pdf->SetXY(20, 235);
$pdf->MultiCell(170,5,utf8_decode('La forma de pago es 50 % de anticipo, 20 % semanal, partir de la segunda semana, conforme al avance y 10 % al finalizar la última revisión.'));
$pdf->SetXY(20, 250);
$pdf->MultiCell(170,5,utf8_decode('Las revisiones, se harán a petición del cliente, y deberán ser solicitadas dentro de los 15 días siguientes a la recepción de los entregables.'));

$pdf->AddPAge();

$pdf->SetXY(20, 45);
$pdf->MultiCell(170,5,utf8_decode('Los depósitos, se deberán de abonar a la siguiente HSBC No. 6419640200 CLABE INTERBANCARIA 021180064196402994 a nombre de MOISÉS BARRIENTOS LOZANO.'));
$pdf->SetXY(20, 60);
$pdf->MultiCell(170,5,utf8_decode('El importe de la presente propuesta es de $ 15,000.00 (QUINCE MIL PESOS 00/100 M. N.), sin incluir el I. V. A.'));//insertar los IMPORTES e IMPORTE TOTAL
//****
$pdf->SetXY(95, 180);
$pdf->Cell(27, 8, utf8_decode('Atentamente'), 0, 'C');
$pdf->SetXY(80, 215);
$pdf->Cell(27, 8, utf8_decode('Ing. Moisés Barrientos Lozano.'), 0, 'C');

$pdf->Output('D'); //Salida al navegador
 
    

?>