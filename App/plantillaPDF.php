<?php
/* require_once '../../../App/model/clsInfraccion.php';
require_once '../../../App/model/clsPersona.php'; */

function getPlantilla()
{
    $plantilla = '<body>';
    $plantilla .= '<img src="resources/Imagen3.jpg"/>';
    $plantilla .= '<h3>CONSTANCIA DE PARTICIPACIÓN Y <br> CONFORMIDAD EN CAPACITACIÓN VIRTUAL</h3>';
    $plantilla .= '<p>CAP. ASIM. SPNP Evelyn Analí TRUJILLO RAMOS, en calidad de JEFA DEL ÁREA ESTADÍSTICA de UNIINSAN OFIGCS DIRSAPOL, dejo constancia que la persona «Grado» «Apellidos_y_Nombre» , en representación de la IPRESS «Unidad» participó en la capacitación que se llevó a cabo el día 15 de marzo de 2023 , desde las 10:00 a.m. hasta las 12:00 p.m., de acuerdo a la ORDEN TELEFÓNICA Nº 02-2023-DIRSAPOL/OFIGCS UNIINSAN. AREEST del 13MAR2023. </p>';
    $plantilla .= '<p>La capacitación se llevó a cabo de manera virtual mediante la plataforma Google Meet, y durante las sesiones de formación, el participante mencionado estuvo presente y participó activamente en la discusión de los siguientes temas:</p>';
    $plantilla .= '
    <ol>
    <li>USO Y MANEJO DEL SISTEMA DE REGISTRO DE PRESTACIONES DE SALUD (SISTEMA SEIS).</li>
    <li>USO Y MANEJO DEL SISTEMA DE REGISTRO DE PRESTACIONES DE SALUD (SISTEMA EIS</li>
    <li>IPRESS CON ALTA DEMANDA DE ERRORES.</li>
    <li>CPMS DE NIVEL 2 USADO EN EL NIVEL 1.</li>
    <li>PROCESO DE REGISTRO DE PRESTACIONES.</li>
    <li>DOCUMENTOS Y HERRAMIENTAS DIGITALES DE APOYO.</li>
    <li>REPORTES DE SUSALUD.</li>
    <li>ROL DEL PERSONAL ESTADÍSTICO DE LAS IPRESS.</li>
    <li>SOLUCIONES IMPLEMENTADAS.</li>
    <li>PROYECCIÓN DE SUS DEFICIENCIAS Y CORRECCIÓN EN EL MOMENTO.</li>
    <li>USO Y MANEJO DE LA HERRAMIENTA DE APOYO DE LOS CPMS PARA EL CONTROL DE CALIDAD.</li>
    </ol>';
    $plantilla .= '<p>La capacitación se llevó a cabo de manera exitosa, brindando a los participantes la oportunidad de adquirir conocimientos valiosos en el ámbito de la estadística en el contexto de DIRSAPOL.</p>';
    $plantilla .= '</body>';
    return $plantilla;
}
