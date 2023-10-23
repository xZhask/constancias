<?php
/* require_once '../../../App/model/clsInfraccion.php';
require_once '../../../App/model/clsPersona.php'; */

function getPlantilla($ipress, $participantes)
{
    $ot = 'Nº 05-2023-DIRSAPOL/OFIGCS UNIINSAN.AREEST del 13JUL2023.';
    $fechaCap = '14 de julio de 2023';
    $fechaAct = '23 de octubre de 2023';
    $plantilla = '<body>';
    $plantilla .= '<img class="imgTop" src="resources/imgHeader.png"/>';
    $plantilla .= '<h3>CONSTANCIA DE PARTICIPACIÓN Y <br> CONFORMIDAD EN CAPACITACIÓN VIRTUAL</h3>';
    $plantilla .= '<p>CAP. ASIM. SPNP Evelyn Anali TRUJILLO RAMOS, como JEFA DEL ÁREA ESTADÍSTICA de UNIINSAN OFIGCS DIRSAPOL, certifico que el personal que figura en el listado adjunto asistió a la capacitación que se realizó el día ' . $fechaCap . ', de 10:00 a.m. a 12:00 p.m. en representación de la IPRESS ' . $ipress . ', conforme a la ORDEN TELEFÓNICA ' . $ot . '</p>';
    $plantilla .= '<p>La capacitación se llevó a cabo de manera virtual mediante la plataforma Google Meet, y durante las sesiones de formación, el participante mencionado estuvo presente y participó activamente en la discusión de los siguientes temas:</p>';
    $plantilla .= '
    <ol>
    <li>USO Y MANEJO DEL SISTEMA DE REGISTRO DE PRESTACIONES DE SALUD (SISTEMA SEIS).</li>
    <li>IPRESS CON ALTA DEMANDA DE ERRORES.</li>
    <li>CPMS DE NIVEL II UTILIZADOS EN ESTABLECIMIENTOS DE NIVEL I.</li>
    <li>PROCESO DE REGISTRO DE PRESTACIONES.</li>
    <li>DOCUMENTOS Y HERRAMIENTAS DIGITALES DE APOYO.</li>
    <li>REPORTES DE SUSALUD.</li>
    <li>ROL DEL PERSONAL ESTADÍSTICO DE LAS IPRESS.</li>
    <li>SOLUCIONES IMPLEMENTADAS.</li>
    <li>PROYECCIÓN DE DEFICIENCIAS Y CORRECCIÓN EN EL MOMENTO.</li>
    <li>USO Y MANEJO DE LA HERRAMIENTA DE APOYO DE LOS CPMS PARA EL CONTROL DE CALIDAD.</li>
    </ol>';
    $plantilla .= '<p>La capacitación se desarrolló con éxito, ofreciendo a los asistentes la posibilidad de adquirir conocimientos importantes en el campo de la estadística en el marco de DIRSAPOL.</p>';
    $plantilla .= '<table>';
    $plantilla .= '<thead><tr><th>N°</th><th>Grado</th><th>Nombre</th></tr></thead>';
    $plantilla .= '<tbody>';
    foreach ($participantes as $k => $v) {
        $plantilla .= '<tr><td>' . $k + 1 . '</td><td>' . $v['grado'] . '</td><td>' . $v['nombre'] . '</td></tr>';
    }
    $plantilla .= '</tbody>';
    $plantilla .= '</table>';
    $plantilla .= '<p class="t-right">Surquillo, ' . $fechaAct . '</p>';
    $plantilla .= '<img class="firma" src="resources/firmasello.jpeg"/>';


    $plantilla .= '</body>';
    return $plantilla;
}
