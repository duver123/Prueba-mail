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