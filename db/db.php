<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "hl3JhPXXde", "T6vZSRUphf", "hl3JhPXXde");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
