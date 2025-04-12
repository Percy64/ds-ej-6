<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="css/grid.css"> <!-- Enlace al archivo CSS de grid -->
    <title>Resultado</title>
</head>
<body>
    <main class="row">
        <section class="col_12 flex flex-a-c flex-j-c">
            <div> 
                <h1>Datos Recibidos</h1>
                <?php
                echo "
                <p>Nombre: ".$_POST['nombre']."</p>
                <p>Apellidos: ".$_POST['apellidos']."</p>
                <p>Documento: ".$_POST['dni']."</p>
                <p>Dirección: ".$_POST['direccion']."</p>
                <p>Ciudad: ".$_POST['ciudad']."</p>
                <p>Provincia: ".$_POST['provincia']."</p>
                <p>Fecha de Nacimiento: ".$_POST['fecha_nacimiento']."</p>
                <p>Teléfono: ".$_POST['telefono']."</p>
                <p>Email: ".$_POST['email']."</p>";
                ?>
                <a href="index.php">Volver</a> <!-- Enlace para volver al formulario -->
            </div>
        </section>
        
    </main>


</body>
</html>
