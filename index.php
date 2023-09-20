<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <?php include 'archivoPHP.php'; ?>

    <h1>Agregar usuario</h1>

    <form action="archivoSPHP.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <input type="submit" value="Insertar Usuario">
    </form>
    
</body>
</html>
