<?php
session_start();
include("registro.php");
$nombre=$_SESSION['nombre'];
$sql="SELECT nombre, correo, contraseña FROM registro p WHERE nombre='".$nombre."'";
$ejecutarInsertar=$enlace->query($sql);

while($data=$ejecutarInsertar->fetch_assoc()){
    $nombre=$data['nombre'];
    $correo=$data['correo'];
    $contraseña=$data['contraseña'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="lol.css" />
    <style>
        .container-navbar {
            background-color: var(--primary-color);
            display: flex;
            justify-content: center;
        }
        .navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem 0;
        }
        .menu {
            display: flex;
            gap: 5rem;
            list-style: none;
        }
        .menu a {
            text-decoration: none;
            font-size: 1.3rem;
            color: var(--dark-color);
            font-weight: 600;
            text-transform: uppercase;
            position: relative;
        }
        .menu a::after {
            content: '';
            width: 1.5rem;
            height: 1px;
            background-color: #fff;
            position: absolute;
            bottom: -3px;
            left: 50%;
            transform: translate(-50%, 50%);
            opacity: 0;
            transition: all .3s ease;
        }
        .menu a:hover::after {
            opacity: 1;
        }
        .menu a:hover {
            color: #fff;
        }
        .Datos_usuario {
            border: 5px solid black;
            width: 500px;
            height: 500px;
            background: red;
        }
        .titulo {
            text-decoration-line: underline;
            margin-bottom: 35px;
        }
    </style>
</head>
<body>
    <div class="container-navbar">
        <nav class="navbar container">
            <ul class="menu">
                <li><a href="#"><?php echo $nombre; ?></a></li>
                <li><a href="#">MI PERFIL</a></li>
                <li><a href="Carrito.php">MI CARRITO</a></li>
                <li><a href="Mi cuenta.html">SALIR</a></li>
            </ul>
        </nav>
    </div>
    <h1>¡Bienevenid@, !</h1>
    <br>
    <br>
    <br>
    <center>
        <div class="Datos_usuario">
            <h2 class="titulo">Datos del perfil</h2>
            <h3>Nombre: <?php echo $nombre;?></h3>
            <br>
            <h3>Correo: <?php echo $correo;?></h3>
            <br>
            <h3>Contraseña: <?php echo $contraseña;?></h3>
            <br>
        </div>
    </center>
</body>
</html>


        <?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "pw";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    

    $insertarDatos = "INSERT INTO registro VALUES('', '$nombre', '$correo', '$contraseña')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
}
?>

<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "pw";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (isset($_POST['sesiones'])) {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contra'];
    

    $insertarDatos = "INSERT INTO sesiones VALUES('', '$correo', '$contraseña')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
}
?>




























?>