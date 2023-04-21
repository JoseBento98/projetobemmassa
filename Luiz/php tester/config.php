<?php //configurando metodo Estatico

    $print = function($class){
        if(file_exists('Classes/' .$class. '.php')){
            include_once('Classes/' .$class. '.php');
        }
    };

    spl_autoload_register($print);

?>