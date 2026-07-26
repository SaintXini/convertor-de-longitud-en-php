<?php

$valor = '';
$desde = '';
$hasta = '';

// convertirlo a la medida estandar sería metros

function convertir_a_metros($valor, $unidad_desde){
    switch($unidad_desde){

        case 'Milimetro':
            return $valor / 1000;
        case 'Centimetro':
            return $valor / 100;
        case 'Decimetro':
            return $valor / 10;
        case 'Metro':
            return $valor;
        case 'Decametro':
            return $valor * 10;
        case 'Hectometro':
            return $valor * 100;
        case 'Kilometro':
            return $valor * 1000;
        break;
        default:
            return 'Unidad no válida';
        break;
    }
}

function convertir_desde_metros($valor, $unidad_hasta){
    switch($unidad_hasta){

        case 'Milimetro':
            return $valor * 1000;
        case 'Centimetro':
            return $valor * 100;
        case 'Decimetro':
            return $valor * 10;
        case 'Metro':
            return $valor;
        case 'Decametro':
            return $valor / 10;
        case 'Hectometro':
            return $valor / 100;
        case 'Kilometro':
            return $valor / 1000;
        break;
        default:
            return 'Unidad no válida';
        break;
    }
}




if(isset($_POST['convertir'])){
    $valor = $_POST['valor'];
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];
    
    $calculoDesde = convertir_a_metros($valor, $desde);
    $calcularHasta = convertir_desde_metros($calculoDesde, $hasta);
;
    $resultado = number_format($calcularHasta, 2);
}


?>