<?php

    class conexion{
        //Funcion de la conexion de la base de datos de mysql usando PDO
        public static function conexionbd(){
            $host = 'localhost';
            $dbname = 'cafeteria';
            $username = 'root';
            $password= '';
            try{
                $con = new PDO("mysql:host=$host;dbname=$dbname;username=$username",$username,$password);
               

            }catch(PDOException $e){
                echo("Error de conexion"),$e->getMessage();
            }
            return $con;
        }
    }
?>