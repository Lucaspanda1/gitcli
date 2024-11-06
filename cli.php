<?php 

$short ='';
$long = [
    'date',
    'texto:'
];

$options = getopt($short,$long);

//print_r($options);

$command =array_key_first($options);

switch ($command) { 
    case 'date' :
        echo date('d/m/Y h:i:s')."\n";
        case 'texto' :
            echo $options[$command]."\n";
        break;
        default :   
        echo "Comando invalido";
    }