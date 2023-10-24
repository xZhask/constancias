<?php
require 'bookstores/vendor/autoload.php';
require 'generarPDF.php';


use PhpOffice\PhpSpreadsheet\IOFactory;

$ruta = 'Asistencia3.xlsx';
$documento = IOFactory::load(($ruta));
$hojaActual = $documento->getSheet(0);

$ultimaFila = $hojaActual->getHighestRow();

$unidades = [];
$participantes = [];
for ($i = 2; $i <= $ultimaFila; $i++) {
    $cord_nombre = "B" . $i;
    $cord_grado = "C" . $i;
    $cord_ipress = "D" . $i;
    $celdaNombre = $hojaActual->getCell($cord_nombre)->getValue();
    $celdaGrado = $hojaActual->getCell($cord_grado)->getValue();
    $celdaIpress = $hojaActual->getCell($cord_ipress)->getValue();

    if (!in_array($celdaIpress, $unidades)) {
        $unidades[] = $celdaIpress;
        $participante = ['grado' => $celdaGrado, 'nombre' => $celdaNombre];
        $participantes[] = ['ipress' => $celdaIpress, 'participantes' => [$participante]];
    } else {
        $index = array_search($celdaIpress, $unidades);
        $participante = ['grado' => $celdaGrado, 'nombre' => $celdaNombre];
        $participantes[$index]['participantes'][] = $participante;
    }
}

foreach ($participantes as $key => $value) {
    generarPdf($value['ipress'], $value['participantes']);
}
