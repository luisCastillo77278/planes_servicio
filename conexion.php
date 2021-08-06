<?php
    // funcion que retorna la conexion de la base de datos
    function Conexion(){
        $conexion = pg_connect('host=localhost dbname=ipcet port=5432 user=postgres password=Pr4fs#uj4t*gSD$db') or die ("error de conexcion".pg_last_error());
        if ($conexion){ // si es exitoso retornamos la conexion
            return $conexion;
        }else{ // si esto no pasa retornamos un falso
            return false;
        }
    }

    // funcion para concatenar la ruta con el documentosUsuarios
    function concatFile($format, $folio, $oficio){
        date_default_timezone_set('America/Mexico_City');
        $url = '/var/www/example.com/html/ProteccionCivil23/documentosUsuarios/'.$format.'_'.$folio.'_'.$oficio.'_'.date('d-m-Y_h:i:s a',time()).'.pdf';
        $doc = pg_query ("INSERT INTO oficio_e1(id_oficio, url_doc) VALUES (DEFAULT, '$url')");
        if($doc){
            echo "<br>Los datos se insertaron en la tabla oficios";
        }else{
            echo "<br>Los datos no se insertaron en la tabla oficio";
        }
        return $url;
    }

?>