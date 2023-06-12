<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="js/buscar.js"></script>
    <link rel="stylesheet" href="css/lista2.css">
</head>

<body>
    <h2>Listado de Bebida</h2>
    <div class="button-container">
        <a href="Vista/insertar.php" class="boton-izquierda"><button class="agregar">Agregar</button></a>
        <form action="#" method="GET">

            <input class="buscar-input" type="text" id="busqueda" placeholder="Buscar por nombre">
            <button class="buscar-button" onclick="buscar()">Buscar</button>
        </form>

    </div>

    <?php
    include("Modelo/conexion.php");
    ?>
    <table id="tabla">

        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>tamaño</th>
                <th>precio</th>
                <th>fecha registro</th>
                <th>activo</th>
                <th>eliminar</th>
                <th>editar</th>
            </tr>
        </thead>
        <tbody>
            <!-- Usando el metodo foreach para recorrer los datos  -->
            <?php
            include("Controlador/bebidaControlador.php");
            $query = ControladorBebidas::ListadoBebidas();
            foreach ($query as $datos) { ?>
                <tr>
                    <td>
                        <?= $datos["id"] ?>
                    </td>
                    <td>
                        <?= $datos["nombre"] ?>
                    </td>
                    <td>
                        <?= $datos["precio"] ?>
                    </td>
                    <td>
                        <?= $datos["tamaño"] ?>
                    </td>
                    <td>
                        <?= $datos["fecha_registro"] ?>
                    </td>
                    <td>
                        <?= $datos["activo"] ?>
                    </td>
                    <td>
                        <!-- action lo mandamos a llamar al controlador donde esta la funcion de eliminar y me paresera un mensaje si lo quiere elimar -->
                        <form action="Controlador/BebidaControlador.php" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este registro?');">
                            <input type="hidden" name="id" value="<?= $datos["id"] ?>">
                            <input class="eliminar" type="submit" name="eliminar" value="Eliminar">
                        </form>
                    </td>

                    <td>
                        <!-- Me rederige a una pantalla editar dependiendo el id es la bebidas que se va editar o actualizar  -->
                        <a href="Vista/editar.php?id=<?= $datos["id"] ?>">
                            <button class="editar">Editar</button>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> </script>
</body>
</html>