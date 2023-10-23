<?php
require_once 'bookstores/vendor/autoload.php';
require_once 'plantillaPDF.php';


function generarPdf($ipress, $participantes)
{
    $css = file_get_contents('stylePdf.css');
    $mpdf = new \Mpdf\Mpdf([
        'format' => 'A4',
        'setAutoTopMargin' => 'strech',
        'orientation' => 'P'
    ]);
    /* $mpdf->SetHTMLHeader(
        '<img src="resources/Imagen3.jpg"/>'
    ); */

    //$plantilla = getPlantilla($idatencion);
    $plantilla = getPlantilla($ipress, $participantes);
    $mpdf->showImageErrors = true;
    $mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);
    $mpdf->WriteHTML($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);

    $mpdf->Output('../PDF/' . $ipress . '.pdf', 'F');
    //I:mostrar, D: Descargar, F: guardar ruta Local
}
