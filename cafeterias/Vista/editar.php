<?php
// Obtener el ID de la bebidas 
@include('../Controlador/bebidaControlador.php');
$id = $_GET["id"]; 

// obtener los datos de la bebida por su ID utilizando el controlador
$bebida = ControladorBebidas::ObtenerBebidaPorId($id);
$nombre = $bebida["nombre"];
$precio = $bebida["precio"];
$tamaño = $bebida["tamaño"];
$fecha_registro = $bebida["fecha_registro"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="../js/validar.js"></script>
    <script src="../js/seleccionar.js"></script>
    <link rel="stylesheet" href="../css/insertar.css">
</head>

<body>
    <h2>Agregar Bebida</h2>
    <!-- llamamos el metodo controlador donde esta es ta la funcion de editar  -->
    <form action="../Controlador/BebidaControlador.php" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?= $nombre ?>" required>
        <br><br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.001" value="<?= $precio ?>" required>
        <br><br>
        <label for="tamaño">Tamaño:</label>
        <input type="text" id="tamaño" name="tamaño" value="<?= $tamaño ?>" required>
        <label for="fecha_registro">Fecha_Registro:</label>
        <input type="date" id="fecha_registro" name="fecha_registro" value="<?= $fecha_registro ?>" readonly>
        <br><br>
        <select name="activo">
            <option value="1">Activo</option>
        </select>
        <br><br>
        <input type="submit" value="Guardar" name="editar">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

