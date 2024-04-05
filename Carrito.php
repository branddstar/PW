<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi carrito</title>
    <link rel="stylesheet" href="car.css" />
    <style>
        .container-navbar {
            background-color: var(--primary-color);
            display: flex;
            justify-content: center;
        }
        .navbar {
            display: flex;
            align-items: center; /* Modificación aquí */
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
<body class="">
    <div class="container-navbar">
        <nav class="navbar container">
            <ul class="menu">
                <li><a href="#"><?php echo isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Usuario'; ?></a></li>
                <li><a href="perfil.php">MI PERFIL</a></li>
                <li><a href="#">MI CARRITO</a></li>
                <li><a href="Mi cuenta.html">SALIR</a></li>
            </ul>
        </nav>
    </div>
    <header>
        <h1>Mi carrito de compras</h1>
    </header>
    <section class="contenedor">
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Paquete PW</span>
                <img src="Imagenes/IMG-20240305-WA0091.jpg" alt="" class="img-item">
                <span class="precio-item">$200.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>
            <div class="carrito-items">
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">$200.00</span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
    <script src="car.js"></script>
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>
</html>