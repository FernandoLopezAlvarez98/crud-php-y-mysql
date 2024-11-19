<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM users";

$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Sistema CRUD</title>
</head>
<body>
    <!-- Formulario de registro de usuarios en el panel de administrador-->
    <div class="users-form">
        <form action="insert_user.php" method="POST">
            <input type="text" name="name" placeholder="Nombre(s)">
            <input type="text" name="lastname" placeholder="Apellidos">
            <input type="text" name="username" placeholder="Nombre de usuario">
            <input type="password" name="password" placeholder="Contrasña">
            <input type="password" name="cpassword" placeholder="Confirma contraseña">
            <input type="email" name="email" placeholder="Correo electrónico">
            <input type="submit" value="Agregar">
        </form>
    </div>

    <!-- Tabla de contenido de los usuarios registrados en la base de datos-->
    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Correo</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['lastname'] ?></th>
                        <th><?= $row['username'] ?></th>
                        <th><?= $row['password'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <!-- Botones de eliminar y editar-->
                        <th><a href="update.php?id=<?=$row['id']?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?=$row['id']?>" class="users-table--delete" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">Eliminar</a></th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
    

</body>
</html>