<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Reto0/Actores</title>
    <link rel="stylesheet" href="css/index.css">
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
                <li><a href="Merch.php">Merchandising</a></li>
                <li><a href="Mult.php">Multimedia</a></li>
                <li style="float:right"><a href="Index.php" id="active">Inicio</a></li>
            </ul>
        </nav>
        <section>
        <h2>El equipo A</h2>
            <div id="datos">
                
                <dl>
                    <dt><b>Duracion media cap. :</b></dt></br>
                        <dd> 60 minutos</dd>
                </dl></br>
                <dl>
                    <dt><b>Genero :</b></dt></br>
                        <dd>Accion, aventura</dd>
                </dl></br>
                <dl>
                    <dt><b>Información :</b></dt></br>
                        <dd>Serie TV (1983-1987)</dd>
                </dl></br>
                <dl>
                    <dt><b>Sinopsis :</b></dt></br>
                        <dd>Narra las andanzas de un grupo de cuatro soldados desertores de la guerra de Vietnam, que trabajan como mercenarios, siempre por causas justas.</dd>
                </dl>
            </div>
            <img id="FotSin" src="img/Sinops.jpg" alt="FotError" >
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
