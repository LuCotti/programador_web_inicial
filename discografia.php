<?php include('header.php');?>

<section id="discografia">
<h2>Discografía</h2>
<ul>
    <li><a href="discografia.php?sec=ht">Hybrid Theory</a></li>
    <li><a href="discografia.php?sec=m">Meteora</a></li>
    <li><a href="discografia.php?sec=mtm">Minutes to Midnight</a></li>
    <li><a href="discografia.php?sec=ats">A Thousand Suns</a></li>
    <li><a href="discografia.php?sec=lt">Living Things</a></li>
    <li><a href="discografia.php?sec=thp">The Hunting Party</a></li>
    <li><a href="discografia.php?sec=oml">One More Light</a></li>
</ul>

<?php
//VARIABLES
$img = null;
$tag = null;
$info = null;

if (isset($_GET['sec'])) {
    switch(($_GET['sec'])) {
        case 'ht':
            $img = './img/Hybrid-Theory.jfif';
            $tag = 'Hybrid Theory, primer álbum';
            $info = "Hybrid Theory es el álbum debut de la banda estadounidense Linkin Park, publicado por la compañía discográfica Warner Bros. Records el 24 de octubre de 2000. El trabajo fue un éxito comercial: es el álbum de rock del siglo xxi con mayor cantidad de ventas y el segundo álbum debut más vendido de la historia después de Appetite for Destruction (1987) de Guns N' Roses. Además, alcanzó el segundo puesto en la lista Billboard 200, así como otras posiciones altas en otras listas del mundo. Grabado en los NRG Recording Studios en North Hollywood (California) y producido por Don Gilmore, sus letras se relacionan con los problemas que el cantante Chester Bennington experimentó durante su adolescencia, tales como el abuso de sustancias o el maltrato. Hybrid Theory debe su título al nombre anterior del grupo y, según la crítica, hace referencia a la mezcla «híbrida» de heavy metal y rap que caracteriza a su sonido.";
            break;
        case 'm':
            $img = './img/Meteora.jfif';
            $tag = 'Meteora, segundo álbum';
            $info = 'Meteora es el segundo álbum del grupo Linkin Park, lanzado el 25 de marzo de 2003. El álbum ha vendido 13 300 000 de copias en todo el mundo, 6 millones solo en los EE. UU. Solo en su primera semana vendió un estimado de 810 000 copias. Meteora es un disco cargado de una estética plenamente callejera, con grandes influencias del grafiti y con el estilo único que les caracteriza. El nombre del mismo estuvo inspirado en la región rocosa de Meteora en Grecia, donde están construidos numerosos monasterios encima de las piedras.';
            break;
        case 'mtm':
            $img = './img/MTM.jfif';
            $tag = 'Minutes to Midnight, tercer álbum';
            $info = 'Minutes to Midnight es el tercer álbum de estudio de la banda de rock estadounidense Linkin Park, lanzado el 14 de mayo de 2007 a través de Warner Bros. Records. El álbum fue producido por Mike Shinoda y Rick Rubin, y es el primer álbum de estudio de Linkin Park producido sin Don Gilmore, quien había producido los dos álbumes anteriores de la banda. Minutes to Midnight es el álbum de seguimiento de la banda de Meteora (2003) y presenta un cambio en la dirección musical del grupo. Para la banda, el álbum marcó el comienzo de una desviación de su característico sonido nu metal. Minutes to Midnight toma su título del símbolo del Reloj del Juicio Final. También es el primer álbum de larga duración de la banda en llevar la etiqueta Parental Advisory.';
            break;
        case 'ats':
            $img = './img/ATS.jfif';
            $tag = 'A Thousand Suns, cuarto álbum';
            $info = 'A Thousand Suns es el cuarto álbum de estudio de la banda estadounidense Linkin Park, lanzado el 14 de septiembre de 2010 bajo el sello discográfico de Warner Bros. Records. La composición del álbum fue llevada a cabo por la banda, mientras que su producción estuvo a cargo del vocalista Mike Shinoda y de Rick Rubin, con quien el grupo había trabajado en su álbum de estudio anterior, Minutes to Midnight (2007). Las sesiones de grabación tuvieron lugar en los NRG Recording Studios en North Hollywood (Los Ángeles, California) desde 2008 hasta principios de 2010.';
            break;
        case 'lt':
            $img = './img/Living Things.jfif';
            $tag = 'Living Things, quinto álbum';
            $info = 'Living Things (estilizado en mayúsculas) —en español: «Cosas vivientes»— es el quinto álbum de estudio de la banda estadounidense de Rock Linkin Park. El álbum fue lanzado el 26 de junio de 2012 por el sello discográfico Warner Bros. Records. La producción estuvo a cargo del vocalista Mike Shinoda y Rick Rubin, quien coprodujo los dos álbumes anteriores de la banda, Minutes to Midnight y A Thousand Suns. Antes del lanzamiento del álbum, la banda declaró que el nuevo material contaría con una nueva dirección en su música, combinando los elementos rap rock de su álbum debut, Hybrid Theory, y las mezclas electrónicas de A Thousand Suns, manteniendo al mismo tiempo un sonido original. Este es el cuarto álbum de Linkin Park en debutar en la posición número uno en los Estados Unidos. Los otros tres grupos a llevar a cabo esta hazaña son la banda de metal Metallica, Dave Matthews Band y Disturbed.';
            break;
        case 'thp':
            $img = './img/THP.jfif';
            $tag = 'The Hunting Party, sexto álbum';
            $info = 'The Hunting Party —en español: «La partida de caza»— es el sexto álbum de estudio de la banda estadounidense de rock Linkin Park. Producido por los miembros de la banda Mike Shinoda y Brad Delson, se publicó mediante Warner Bros. Records el 13 de junio de 2014 en Alemania, Austria y Suiza, y el 17 de junio en América del Norte. Es su primer trabajo discográfico no grabado en NRG Recording Studios y el primero desde Minutes to Midnight que no es producido por Rick Rubin.';
            break;
        case 'oml':
            $img = './img/OML.jfif';
            $tag = 'One More Light, séptimo y último álbum';
            $info = 'One More Light —en español: «Una luz más»— es el séptimo álbum de estudio de la banda estadounidense de rock Linkin Park. Se publicó el 19 de mayo de 2017 a través de Warner Bros. Records y Machine Shop Records, siguiendo a su publicación de 2014, The Hunting Party. Es el primer álbum con un tema que le da su nombre y la banda lo eligió al considerar que representa el corazón del disco. El primer sencillo, "Heavy", fue publicado el 16 de febrero. One More Light es el último álbum de la banda con Chester Bennington como vocalista principal antes de que falleciera el 20 de julio de 2017. El álbum presenta a Pusha T, Stormzy y Kiiara como cantantes invitados, y el proceso de producción y composición contó con las colaboraciones de Julia Michaels, Ilsey Juber,Justin Tranter, Ross Golan, Andrew Goldstein, blackbear y Eg White.';
            break;
    }
}
?>

<div class="flex">
    <div>
        <a href="<?php echo$img?>" data-lightbox="image-group-1" data-title="<?php echo$tag?>"><img src="<?php echo$img?>" alt="<?php echo$tag?>"></a>
    </div>
    <div class="gente">
        <h3><?php echo$tag?></h3>
    </div>
</div>
<p><?php echo$info?></p>

<?php include('footer.php');?>