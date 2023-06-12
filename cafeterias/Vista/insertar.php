<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="../js/validar.js"></script>
    <link rel="stylesheet" href="../css/insertar.css">
</head>

<body>

    <h2>Agregar Bebida</h2>
    <!-- //Mandomas a llamar ala funcion de insertar que se encuestrea en el controlador  -->
    <form action="../Controlador/BebidaControlador.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.001" placeholder="Ingresa el precio">
        <br><br>
        <label for="tamaño">Tamaño:</label>
        <input type="text" id="tamaño" name="tamaño" required>
        <label for="fecha_registro">Fecha_Registro:</label>
        <input type="date" id="fecha_registro" name="fecha_registro" required>
        <br><br>
        <select name="activo">
                <option value="1">activo</option>
        </select>
        <br><br>
        <input type="submit" value="Guardar" name="insertar">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>