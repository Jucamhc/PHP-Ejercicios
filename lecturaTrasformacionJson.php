<?php
    //JSON
    $jsonContenido=
    '[ 
        {"nombre":"Oscar", "Apellido":"Uh"},
        {"nombre":"Jose", "Apellido":"Perez"}
    ]';

    $resultado= json_decode( $jsonContenido);
    //print_r($resultado);
    //RECORRE EL JSON PARA IMPRIMIR CADA VARIABLE
    foreach($resultado as $personas){
        print_r($personas->nombre." ".$personas->Apellido."<br/>");
    }

    //COMBERTIR UN ARRAY A UN JSON
    $people=array("Oscar"=>40, "Jose"=>20, "Marisa"=>38);

    echo json_encode($people);

?>