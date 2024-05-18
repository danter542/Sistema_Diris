<?php
$valor_oficina = isset($_POST['valor_oficina']) ? $_POST['valor_oficina'] : '';

$html = '<select id="unidad" name="unidad">';

if ($valor_oficina == 'ABASTECIMIENTO') {
    $html .= '<option value="PROGRAMACION">UNIDAD FUNCIONAL DE PROGRAMACION</option>';
    $html .= '<option value="ADQUISICION">UNIDAD FUNCIONAL DE ADQUISICION</option>';
    $html .= '<option value="PATRIMONIO">UNIDAD FUNCIONAL DE PATRIMONIO</option>';
    $html .= '<option value="ALMACEN">UNIDAD FUNCIONAL DE ALMACEN</option>';
    $html .= '<option value="GENERALES">COORDINACION DE SERVICIOS GENERALES</option>';
} elseif ($valor_oficina == "TESORERIA") {
    $html .= '<option value="opcion2">UNIDAD FUNCIONAL DE RECAUDACION</option>';
    $html .= '<option value="opcion2">UNIDAD FUNCIONAL DE ADMINISTRACION DE FONDOS TRIBUTARIOS</option>';
    $html .= '<option value="opcion2">UNIDAD FUNCIONAL DE GIROS Y PAGADURIA </option>';
} elseif ($valor_oficina == "DIRECCION GENERAL") {
    $html .= '<option value="opcion3">UNIDAD FUNCIONAL DE ASESORIA</option>';
    $html .= '<option value="opcion4">UNIDAD FUNCIONAL DE COMUNICACION</option>';
    $html .= '<option value="opcion4">UNIDAD FUNCIONAL DE MESA DE PARTE</option>';
}

$html .= '</select>';

echo json_encode($html, JSON_UNESCAPED_UNICODE);