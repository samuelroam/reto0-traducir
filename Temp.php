<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Reto0/Temporadas</title>
    <link rel="stylesheet" href="css/Temp.css">
    <?php $fechaPHP = date('Y/m/d - H:i:s');?>
    <script src="js/js.js"></script>
 <!--   <script src="js/dictemp.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    <script type="text/javascript" src="jquery.translate.js"></script>

   <script>
   //Lo intenté poner de varias formas en un archivo aparte, y ninguna de las formas me ha funcionado, así que al final
   // opté por dejarlo aquí

   //He traducido unicamente la temporada 1, ya que el resto es repetir lo mismo varias veces
       var translator = $('body').translate({lang: "es", t: dict});
	var dict={
        "descripcion": {
			es: "Descripción",
			en: "Description"
        },
        "temporadas": {
			es: "Temporadas",
			en: "Seasons"
        },
        "actores": {
			es: "Actores",
			en: "Actors"
        },
        "merchandising": {
			es: "Merchandising",
			en: "Merchandising"
        },
        "multimedia": {
			es: "Multimedia",
			en: "Multimedia"
        },
        "index": {
			es: "Inicio",
			en: "Start"
        },
        "temporadas": {
            es: "Temporadas",
            en: "Seasons"
        },
        "t1": {
            es: "Trumporada 1 (14 episodios)",
            en: "Season 1 (14 episodes)"
        },
        "emitida": {
            es: "Emitida en 1983, cuenta con 14 episodios",
            en: "Published on 1983, and have 14 episodes"
        },
		"1.1": {
			es: "Operacion A.T. 'El pueblo de San Rio Blanco'",
			en: "A.T. Operation 'San Rio Blanco village'"
		},
        "1.2": {
			es: "Operacion A.T. 'El pueblo de San Rio Blanco'",
			en: "A.T Operation 'San Rio Blanco village'"
        },
        "1.3": {
			es: "Los hijos de Jamestown",
			en: "Jamestown's sons"
        },
        "1.4": {
			es: "Presos y convictos",
			en: "Prisoners and convicts"
        },
        "1.5": {
			es: "Una guerra pequeña y mortal",
			en: "A litte and mortal war"
        },
        "1.6": {
			es: "Día negro en Bad Rock",
			en: "Black day at Bad Rock"
        },
        "1.7": {
			es: "El conejo que se comió Las Vegas",
			en: "The rabbit who ate Las Vegas"
        },
        "1.8": {
			es: "Los habitantes de las afueras",
			en: "The inhabitants of the outskirts"
        },
        "1.9": {
			es: "Vacaciones en las colinas",
			en: "Holidays on the hills"
        },
        "1.10": {
			es: "Operación 'costa oeste'",
			en: "'West-side coast' operation"
        },
        "1.11": {
			es: "Una vez mas",
			en: "One more time"
        },
        "1.12": {
			es: "Hasta que la muerte nos separe",
            en: "'Till death do us unite"
        },
        "1.13": {
			es: "Pajeros insólitos",
			en: "Unusual passengers"
        },
        "1.14": {
			es: "Un sitio agradable de visitar",
			en: "A cuchififlastic site place to ibsit"
        },
/*
//Fragmento para ir copiando y pegando
        "": {
			es: "",
			en: ""
        }
        
        */
        

	}
    function cambiaringlestemp(){
		var translator = $('body').translate({lang: "es", t: dict});
		translator.lang("en");
    }
    function cambiaraesptemp(){
        var translator = $('body').translate({lang: "es", t: dict});
        translator.lang("es");
    }
   </script>

   
</head>
<body>
    <div id="container">
        <header>
            <div id="reloj" class="reloj">Cargando Fecha y hora...</div>
        </header>
        <nav>
            <ul>
                <li><a class="trn" data-trn-key="descripcion" href="Desc.php">Descripcion</a></li>
                <li><a class="trn" data-trn-key="temporadas" href="Temp.php" id="active">Temporadas</a></li>
                <li><a class="trn" data-trn-key="actores" href="Act.php">Actores</a></li>
                <li><a class="trn" data-trn-key="merchandising" href="Merch.php">Merchandising</a></li>
                <li><a class="trn" data-trn-key="multimedia" href="Mult.php">Multimedia</a></li>
                <li style="float:right"><a class="trn" data-trn-key="index" href="Index.php">Inicio</a></li>
            </ul>
        </nav>
        <section>
        <h2 class="trn" data-trn-key="temporadas">Temporadas</h2>
            <div id=contenido>
            
            <button class="acordeon">
                <b class="trn" data-trn-key="t1">Temporada 1 (14 episodios)</b>
            </button>
            <div id="temporada1" class="panel">
                <p class="trn" data-trn-key="emitida">Emitida en 1983, cuenta con 14 episodios</p>
                <ol>
                    <li class="trn" data-trn-key="1.1">
                        Operación A.T "El pueblo de San Rio Blanco"
                    </li>
                    <li class="trn" data-trn-key="1.2">
                        Operación A.T "El pueblo de San Rio Blanco"
                    </li>
                    <li class="trn" data-trn-key="1.3">
                        Los hijos de Jamestown
                    </li>
                    <li class="trn" data-trn-key="1.4">
                        Presos y convictos
                    </li>
                    <li class="trn" data-trn-key="1.5">
                    Una guerra pequeña y mortal
                    </li>
                    <li class="trn" data-trn-key="1.6">
                        Día negro en Bad Rock
                    </li>
                    <li class="trn" data-trn-key="1.7">
                        El conejo que se comió Las Vegas
                    </li>
                    <li class="trn" data-trn-key="1.8">
                        Los habitantes de las afueras
                    </li>
                    <li class="trn" data-trn-key="1.9">
                        Vacaciones en las colinas
                    </li>
                    <li class="trn" data-trn-key="1.10">
                        Operación "costa oeste"
                    </li>
                    <li class="trn" data-trn-key="1.11">
                        Una vez más
                    </li>
                    <li class="trn" data-trn-key="1.12">
                        Hasta que la muerte nos separe
                    </li>
                    <li class="trn" data-trn-key="1.13">
                        Pasajeros insólitos
                    </li>
                    <li class="trn" data-trn-key="1.14">
                        Un sitio agradable de visitar
                    </li>
                </ol>
            </div>
            <button class="acordeon">
                <b>Temporada 2 (23 episodios)</b>
            </button>
            <div id="temporada2" class="panel">
            <p>
                Emitida entre 1983 y 1984, cuenta con 23 episodios
            </p>
                <ol>
                    <li class="trn" data-trn-key="2.1">
                        Polvo de diamantes  
                    </li>
                    <li class="trn" data-trn-key="2.2">
                        Receta para pan pesado
                    </li>
                    <li class="trn" data-trn-key="">
                        La única iglesia en la ciudad
                    </li>
                    <li class="trn" data-trn-key="">
                        Mal tiempo en la frontera
                    </li>
                    <li class="trn" data-trn-key="">
                        Cuando tu regresas, jinete distante
                    </li>
                    <li class="trn" data-trn-key="">
                        Cuando tu regresas, jinete distante
                    </li>
                    <li class="trn" data-trn-key="">
                        La guerra de taxis
                    </li>
                    <li class="trn" data-trn-key="">
                        Trabajo forzoso
                    </li>
                    <li class="trn" data-trn-key="">
                        Siempre hay una captura
                    </li>
                    <li class="trn" data-trn-key="">
                        Agua, agua en todas partes
                    </li>
                    <li class="trn" data-trn-key="">
                        Acero
                    </li>
                    <li class="trn" data-trn-key="">
                        El voto blanco
                    </li>
                    <li class="trn" data-trn-key="">
                        La vaca maltesa
                    </li>
                    <li class="trn" data-trn-key="">
                        El vista plano
                    </li>
                    <li class="trn" data-trn-key="">
                        La batalla de bel air
                    </li>
                    <li class="trn" data-trn-key="">
                        Díselo con balas
                    </li>
                    <li class="trn" data-trn-key="">
                        Veneno puro
                    </li>
                    <li class="trn" data-trn-key="">
                        Ahí fuera hay un desierto
                    </li>
                    <li class="trn" data-trn-key="">
                        Un negocio de desguace
                    </li>
                    <li class="trn" data-trn-key="">
                        Más difícil de lo que parecía
                    </li>
                    <li class="trn" data-trn-key="">
                        Maniobras mortales
                    </li>
                    <li class="trn" data-trn-key="">
                        Persuasión semi-amistosa
                    </li>
                    <li class="trn" data-trn-key="">
                        Recuerdos de un amigo
                    </li>
                </ol>
            </div>
            <button class="acordeon">
                <b>Temporada 3 (25 episodios)</b>
            </button>
            <div id="temporada3" class="panel">
                <p>
                    Emitida entre 1984 y 1985, cuenta con 25 episodios
                </p>
                <ol>
                    <li class="trn" data-trn-key="">
                        Balas y bikinis
                    </li>
                    <li class="trn" data-trn-key="">
                        El recodo del río (primera parte)
                    </li>
                    <li class="trn" data-trn-key="">
                        El recodo del río (segunda parte)
                    </li>
                    <li class="trn" data-trn-key="">
                        Fuego
                    </li>
                    <li class="trn" data-trn-key="">
                        ¡Leña!
                    </li>
                    <li class="trn" data-trn-key="">
                        Ataque doble
                    </li>
                    <li class="trn" data-trn-key="">
                        Problemas sobre ruedas
                    </li>
                    <li class="trn" data-trn-key="">
                        La isla
                    </li>
                    <li class="trn" data-trn-key="">
                        Gira por toda Europa
                    </li>
                    <li class="trn" data-trn-key="">
                        Los sheriffs de Rivertown
                    </li>
                    <li class="trn" data-trn-key="">
                        Las campanas de St. Mary
                    </li>
                    <li class="trn" data-trn-key="">
                        La última moda
                    </li>
                    <li class="trn" data-trn-key="">
                        Fuera de combate
                    </li>
                    <li class="trn" data-trn-key="">
                        Un café con Joe
                    </li>
                    <li class="trn" data-trn-key="">
                        El gran apretón
                    </li>
                    <li class="trn" data-trn-key="">
                        Campeón
                    </li>
                    <li class="trn" data-trn-key="">
                        Pieles
                    </li>
                    <li class="trn" data-trn-key="">
                        Un casino en un camión
                    </li>
                    <li class="trn" data-trn-key="">
                        Blancos móviles
                    </li>
                    <li class="trn" data-trn-key="">
                        Caballeros de al ruta
                    </li>
                    <li class="trn" data-trn-key="">
                        Desperdicios
                    </li>
                    <li class="trn" data-trn-key="">
                        Recompensa
                    </li>
                    <li class="trn" data-trn-key="">
                        Asalto en Beverly Hills
                    </li>
                    <li class="trn" data-trn-key="">
                        Se está cociendo un problema
                    </li>
                    <li class="trn" data-trn-key="">
                        Incidente en Crystal Lake
                    </li>
                </ol>
            </div>
            <button class="acordeon">
                <b>Temporada 4 (25 episodios)</b>
            </button>
            <div id="temporada4" class="panel">
                <p>
                    Emitida entre 1985 y 1986, cuenta con 23 episodios
                </p>
                <ol>
                    <li class="trn" data-trn-key="">
                        El día del juicio (primera parte)
                    </li>
                    <li class="trn" data-trn-key="">
                        El día del juicio (segunda parte)
                    </li>
                    <li class="trn" data-trn-key="">
                        Dónde está el monstruo cuando lo buscas
                    </li>
                    <li class="trn" data-trn-key="">
                        Alquiler con opción a muerte
                    </li>
                    <li class="trn" data-trn-key="">
                        El camino de la esperanza
                    </li>
                    <li class="trn" data-trn-key="">
                        El corazón del rock and roll
                    </li>
                    <li class="trn" data-trn-key="">
                        Lucha libre
                    </li>
                    <li class="trn" data-trn-key="">
                        Sangre, sudor y victoria
                    </li>
                    <li class="trn" data-trn-key="">
                        Cambio de personalidad
                    </li>
                    <li class="trn" data-trn-key="">
                        Como buenos vecinos
                    </li>
                    <li class="trn" data-trn-key="">
                        El doctor no está
                    </li>
                    <li class="trn" data-trn-key="">
                        El tío partenueces
                    </li>
                    <li class="trn" data-trn-key="">
                        La rueda de la fortuna
                    </li>
                    <li class="trn" data-trn-key="">
                        Viene el Equipo A
                    </li>
                    <li class="trn" data-trn-key="">
                        Sólo para socios
                    </li>
                    <li class="trn" data-trn-key="">
                        Cowboy George
                    </li>
                    <li class="trn" data-trn-key="">
                        Esperando a Wayne el loco
                    </li>
                    <li class="trn" data-trn-key="">
                        Misterio en Whispering Pines
                    </li>
                    <li class="trn" data-trn-key="">
                        Bajo la superficie
                    </li>
                    <li class="trn" data-trn-key="">
                        La misión de la paz
                    </li>
                    <li class="trn" data-trn-key="">
                        ¿Qué ocurre con Harry?
                    </li>
                    <li class="trn" data-trn-key="">
                        El equipo y la familia
                    </li>
                    <li class="trn" data-trn-key="">
                        El ruido del trueno
                    </li>
                </ol>
            </div>
            <button class="acordeon">
                <b>Temporada 5 (23 episodios)</b>
            </button>
            <div id="temporada5" class="panel">
                <p>
                    Emitida entre 1986 y 1987, cuenta con 13 episodios
                </p>
                <ol>
                    <li class="trn" data-trn-key="">
                        El topo
                    </li>
                    <li class="trn" data-trn-key="">
                        Consejo de guerra
                    </li>
                    <li class="trn" data-trn-key="">
                        Línea de fuego
                    </li>
                    <li class="trn" data-trn-key="">
                        Táctiva defensiva
                    </li>
                    <li class="trn" data-trn-key="">
                        La teoría de la revolución
                    </li>
                    <li class="trn" data-trn-key="">
                        La intriga
                    </li>
                    <li class="trn" data-trn-key="">
                        Asesinato en el auditorio
                    </li>
                    <li class="trn" data-trn-key="">
                        Reunión familiar
                    </li>
                    <li class="trn" data-trn-key="">
                        El punto sin retorno
                    </li>
                    <li class="trn" data-trn-key="">
                        La calavera de cristal
                    </li>
                    <li class="trn" data-trn-key="">
                        La espía que se burló de mi
                    </li>
                    <li class="trn" data-trn-key="">
                        El equipo de la tercera edad
                    </li>
                    <li class="trn" data-trn-key="">
                        La emboscada
                    </li>
                </ol>
            </div>
            <script>
                var acc = document.getElementsByClassName("acordeon");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight) {
                            panel.style.maxHeight = null;
                        } else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                        } 
                    });
                }

                
            </script>

            </div>
            <input type="button" value="Taducir a inglés...o eso creo" onclick="cambiaringlestemp()">
            <input type="button" value="ARRIBA ESPAÑA digo...traducir" onclick="cambiaraesptemp()">
        <div id=aside>
            <img src="img/equipoA.jpg" >
            </div>
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