<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Reto0/Actores</title>
    <link rel="stylesheet" href="css/merchan.css">
    <?php $fechaPHP = date('Y/m/d - H:i:s');?>
    <script src="js/js.js"></script>
</head>
<body>
    <div id="container">
        <header>
            <div id="reloj" class="reloj">Cargando Fecha y hora...</div>
        </header>
        <nav>
            <ul>
                <li><a href="Desc.php">Descripcion</a></li>
                <li><a href="Temp.php">Temporadas</a></li>
                <li><a href="Act.php">Actores</a></li>
                <li><a href="Merch.php" id="active">Merchandising</a></li>
                <li><a href="Mult.php">Multimedia</a></li>
                <li style="float:right"><a href="Index.php">Inicio</a></li>
            </ul>
        </nav>
        <section>
            <h2 id="nombre">Merchandising</h2>
            <table id="merchan">
                <tr>
                    <th>
                        <h3>Funko Pop M. A. Barracus</h3>
                        <img class="articulos" src="img/Merchandising/prod1.jpg" alt="error1">
                        <h2>12€</h2>
                        <input type ="button" value="Comprar">
                    </th>
                    <th>
                        <h3>Figura M. A. Barracus</h3>
                        <img class="articulos" src="img/Merchandising/prod2.jpg" alt="error1">
                        <h2>5€</h2>
                        <input type ="button" value="Comprar">
                    </th>
                    <th>
                        <h3>Figura furgoneta equipo A</h3>
                        <img class="articulos" src="img/Merchandising/prod3.jpg" alt="error1">
                        <h2>25€</h2>
                        <input type ="button" value="Comprar">
                    </th>
                </tr>
                <tr>
                    <th>
                        <h3>Camiseta Equipo A</h3>
                        <img class="articulos" src="img/Merchandising/prod4.jpg" alt="error1">
                        <h2>10€</h2>
                        <input type ="button" value="Comprar">
                    </th>
                    <th>
                       <h3>Camiseta furgoneta equipo A</h3>
                        <img class="articulos" src="img/Merchandising/prod5.jpg" alt="error1">
                        <h2>10€</h2>
                        <input type ="button" value="Comprar">
                    </th>
                    <th>
                        <h3>Camiseta M. A. Barracus</h3>
                        <img class="articulos" src="img/Merchandising/prod6.jpg" alt="error1">
                        <h2>15€</h2>
                        <input type ="button" value="Comprar">
                    </th>
                </tr>
            </table>
        </section>
        <footer>
            <p>Adrián Gómez, Samuel Rodríguez, Iñigo Perez @ Zubiri manteo
                <script>
                    document.write('<?php echo "$fechaPHP";?>');
                </script>
            </p>
        </footer>
    </div>
</body>
</html>
