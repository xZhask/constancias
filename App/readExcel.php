<?php
require 'bookstores/vendor/autoload.php';
require 'generarPDF.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$ruta = 'Asistencia1.xlsx';
$documento = IOFactory::load(($ruta));
$hojaActual = $documento->getSheet(0);

$ultimaFila = $hojaActual->getHighestRow();

$unidades = [];
$participantes = [];
for ($i = 2; $i <= $ultimaFila; $i++) {
    $cord_nombre = "B" . $i;
    $cord_ipress = "D" . $i;
    $celdaNombre = $hojaActual->getCell($cord_nombre)->getValue();
    $celdaIpress = $hojaActual->getCell($cord_ipress)->getValue();

    if (!in_array($celdaIpress, $unidades)) {
        $unidades[] = $celdaIpress;
        $participantes[] = ['ipress' => $celdaIpress, 'participantes' => [$celdaNombre]];
    } else {
        $index = array_search($celdaIpress, $unidades);
        $participantes[$index]['participantes'][] = $celdaNombre;
    }
}
$ipress = 'HOSPITAL ANGAMOS';
$arr = ['miau', 'remiau'];
miau($ipress);
echo json_encode($participantes);





//
//echo (json_encode($unidades));
//print_r($unidades);
//echo $unidades[0];
