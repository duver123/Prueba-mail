<?php
include "./mPDF/mpdf.php";

$html = "
    <<h4>Titulo principal</h4>
    <p align='center'><b>Titulo de Documento</b></p>
    <hr>
    <table>
        <th>
            <tr>
                <td>Diseño Industrial</td>
              
                <td>La loquita de Bervely Hills</td>
            </tr>
        </th>
        <tbody>
            <tr>
                <td>Contenido1</td>
                <td>Contenido2</td>
                <td></td>
            </tr>
        </tbody>
    </table>
";
$pdf = new mPDF('c');
$pdf->WriteHTML($html);
$pdf->Output();
exit;


?>
<?php

require_once ('../library/mPDF/mpdf.php');
$mpdf = new mPDF()[
    'mode' => 'utf-8',
    'margin_top' => 10,
    'margin_right' =>10,
    'margin_left' =>10,
    'margin_bottom' =>15,

];


$template = '<div class="container" style="background-color: #fff"

        <!-----------------------  Membrete de Bicco Farms  ----------------->
        <img  src="../../assets/images/logotipo_bicco.png" alt/ style="width: 18%; padding-top: 15px;">

        <p style="text-align: center; font-weight: bold; padding: 15px 15px; font-size: 1.4rem;">
            LA DIVISIÓN DE TALENTO HUMANO DE <br>
            BICCO FARMS S.A.S <br/>
            NIT 900.500.500-1 <br/>
        </p>
        <p style="text-align: center; font-weight: 300; padding: 15px 15px; font-size: 1.4rem;">CERTIFICA</p>

        <!------------------------  Cuerpo del Documento  ------------------->
        <body>
            <p style="padding: 0px 25px; text-align: justify;">
            Que el(la) Señor(a) <b>CABRERA GONZALEZ DAYAN STEVEN</b> , identificado(a) con la cédula de ciudadanía número 
            <b>1009100201</b>, labora en la compañía desde el 12 de Noviembre de 2018,desempeñando el cargo de 
            <b>Operario Agricola</b>, mediante un contrato a <b>termino indefinido</b>, con
            una asignación salarial de <b>OCHOCIENTOS SESENTA Y DOS MIL OCHOCIENTOS TRES PESOS MCTE**($877.803).
            </p>

            <p style="padding: 0px 25px;">Afiliada a Caja de Compensación : <b>Colsubsidio</b></p>
            <p style="text-align: justify;">{{texto  enviado}}</p>
            <p style="padding: 0px 25px;">Cordialmente: </p>

        </body>

        <!---------------------   Apartado Firma   ----------------------->
        <footer style="font-weight: bold; padding: 0px 25px;">
            img src="../../assets/images/1280px-Firma_de_Agustin_P._Justo.svg.png" alt="" style="width:20%:padding-top: 15px"><br>
            <p>
            MILENA SERRANO PINEDA <br/>
            Jefe de Talento Humano
            </p>

            <hr style="border-color:#000;">
            <p style="text-align: center;">Teléfono: (571) 546 66 11 Cra . 14 No. 79-78 Of. 604 Bogotá, D.C - Colombia <br>
            www.biccofarms.com
            </p>
        </footer>
    </div>
';
$mpdf->IndexEntry("Buffalo");
$mpdf->WriteHTML('$template');
$mpdf->AddPage();
$mpdf->WriteHTML('$template', \Mpdf\HTMLParserMode::DEFAULT_MODE);
$mpdf->CreateIndex(2, '', '', 3, 1, '', 5, 'serif', 'sans-serif');
$mpdf->Output();
exit;

?>
