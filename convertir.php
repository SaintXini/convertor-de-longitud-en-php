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

if(isset($_POST['convertir'])){
    $valor = $_POST['valor'];
    $desde = $_POST['desde'];
    
    $calculoDesde = convertir_a_metros($valor, $desde);

    $resultado = $calculoDesde;
}


?>