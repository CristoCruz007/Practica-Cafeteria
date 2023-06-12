<?php

@include("../Modelo/conexion.php");

class ControladorBebidas
{
    //try-catch en caso de que ocurra un error durante la ejecución.

    //Realiza una consuta en mysql para seleccionar todas las filas de la tabla bebidas donde me muestra el campo activo que es igua 1 y el 0 me lo oculta

    public static function ListadoBebidas()
    {

        try {
            $query = conexion::conexionbd()->prepare("SELECT * FROM bebidas where activo = 1");
            $query->execute();
            $datos = $query->fetchAll();
            return $datos;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //Obtiene los valores del formulario usando post y luego ejecuta una consulta mysql el insert para insertar los datos en la tabla bebidas
    //Si la consulta se ejecuta correctamente, se redirige al usuario a la página lista.php y se muestra un mensaje de éxito. En caso de error, se muestra un mensaje de error.

    public static function InsertarDatos()
    {
        try {
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $tamaño = $_POST['tamaño'];
            $fecha_registro = $_POST['fecha_registro'];
            $activo = $_POST['activo'];
            $query = conexion::conexionbd()->prepare("INSERT INTO bebidas (nombre, precio, tamaño, fecha_registro, activo) VALUES ('$nombre', $precio, '$tamaño','$fecha_registro', $activo)");
            if ($query->execute()) {
                header('Location:../lista.php');
                echo "Se inserto Correctamente.\n";
            } else {
                echo "Hubo un error";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    // Obtiene los valores del formulario usando post y ejecuta una consulta mysql update para actualizar los campos correspondientes en la tabla bebidas según el id.

    public static function EditarDatos()
    {
        try{
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $tamaño = $_POST['tamaño'];
        $fecha_registro = $_POST['fecha_registro'];
        $activo = $_POST['activo'];
        $query = conexion::conexionbd()->prepare("UPDATE bebidas SET nombre = '$nombre', precio = $precio, tamaño = '$tamaño', fecha_registro = '$fecha_registro', activo = '$activo' WHERE id = $id");
        if ($query->execute()) {
            header('Location:../lista.php');
            echo "Se inserto Correctamente.\n";
        } else {
            echo "Hubo un error";
        }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    //Esta funcion no elimina domas actualiza el campo activo 1 a 0 para que no me paresca en la tabla.
    //Si la consulta se ejecuta correctamente, se redirige al usuario a la página lista.php y se muestra un mensaje de éxito. En caso de error, se muestra un mensaje de error.
    public static function EliminarDatos()
    {
        try{
        $id = $_POST['id'];
        $query = conexion::conexionbd()->prepare("UPDATE bebidas SET activo = 0 WHERE id = $id");
        if ($query->execute()) {
            header('location:../lista.php');
            echo "Se elimino Correctamente.\n";
        } else {
            echo "Hubo un error";
        }
        }catch(Exception $e){
            echo $e->getMessage();
        }

    }

    // esta función toma un ID como parámetro, realiza una consulta a la base de datos para obtener los datos de la bebida correspondiente a ese ID y devuelve esos datos en forma de un array
    public static function ObtenerBebidaPorId($id)
    {
        $query = conexion::conexionbd()->prepare("SELECT * FROM bebidas WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->execute();
        $bebida = $query->fetch(PDO::FETCH_ASSOC);
        return $bebida;
    }
}
//Envia una accion en insertar,editar y eliminar a través del formulario
if (array_key_exists('insertar', $_POST)) {
    ControladorBebidas::InsertarDatos();
}
if (array_key_exists('editar', $_POST)) {
    ControladorBebidas::EditarDatos();
}
if (array_key_exists('eliminar', $_POST)) {
    ControladorBebidas::EliminarDatos();
}
