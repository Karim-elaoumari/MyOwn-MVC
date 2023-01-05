<?php
spl_autoload_register(function($class_name){ 
    $array_path = array(
        '../app/controllers/',
        '../app/views/',
        '../app/models/'
    );
    foreach($array_path as $path){
        $file = sprintf($path.'%s.php',$class_name);
        
        if(is_file($file)){
            include_once $file;
        }
    }
});