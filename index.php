<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grid.css">
    <title>ejercicio6</title>
</head>
<body>
    <main class="row">
        <section class="col_12 flex flex-a-c flex-j-c">
            <form action="resultado.php" method="post" class="col_3 flex flex-flox-c flex-a-c form_01">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>

            <label for="dni">documento:</label>
            <input type="tel" id="dni" name="dni" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>

            <label for="ciudad">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad" required>

            <label for="provincia">Provincia:</label>
            <input type="text" id="provincia" name="provincia" required>

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Enviar">
            
            </form>
        </section>
    </main>
</body>
</html>