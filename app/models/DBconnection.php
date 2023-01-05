<?php
class DBconnection{
    public static function getConnection(){
        $db = new PDO('mysql:host=localhost;dbname=jokes','root','');
        return $db;
    }
}
?>