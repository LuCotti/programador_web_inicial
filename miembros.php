<?php include('header.php');?>

<section id="miembros">
<h2>Miembros</h2>
<ul>
    <li><a href="miembros.php?sec=cb">Chester Bennington</a></li>
    <li><a href="miembros.php?sec=ms">Mike Shinoda</a></li>
    <li><a href="miembros.php?sec=bd">Brad Delson</a></li>
    <li><a href="miembros.php?sec=df">Dave Farrell</a></li>
    <li><a href="miembros.php?sec=jh">Joe Hahn</a></li>
    <li><a href="miembros.php?sec=rb">Rob Bourdon</a></li>
</ul>

<?php
//VARIABLES
$img = null;
$tag = null;
$info = null;

if (isset($_GET['sec'])) {
    switch(($_GET['sec'])) {
        case 'cb':
            $img = './img/Chester.jfif';
            $tag = 'Chester Bennington: voz principal';
            $info = 'Chester Charles Bennington (Phoenix, 20 de marzo de 1976-Palos Verdes, 20 de julio de 2017) fue un músico estadounidense, conocido por ser el vocalista principal y compositor de la banda de rock Linkin Park. También fue el vocalista principal de las bandas Grey Daze, Dead by Sunrise y Stone Temple Pilots. <br><br>Bennington ganó prominencia por primera vez como vocalista tras el lanzamiento del álbum debut de Linkin Park, Hybrid Theory (2000), que fue un éxito comercial mundial. El álbum fue certificado Diamante por la Recording Industry Association of America en 2005, lo que lo convierte en el álbum debut más vendido de la década, así como uno de los pocos álbumes en lograr tantas ventas. Los siguientes álbumes de estudio de Linkin Park, desde Meteora (2003) hasta One More Light (2017), continuaron con el éxito de la banda. <br><br>Bennington formó su propia banda, Dead by Sunrise, como un proyecto paralelo en 2005. El álbum debut de la banda, Out of Ashes, fue lanzado el 13 de octubre de 2009. Se convirtió en el cantante principal de Stone Temple Pilots en 2013 para lanzar la obra extendida High Rise el 8 de octubre de 2013, a través de su propio sello discográfico, Play Pen, pero se fue en 2015 para centrarse únicamente en Linkin Park. Como actor, apareció en películas como Crank (2006), Crank: High Voltage (2009) y Saw 3D (2010). <br><br>Bennington luchó contra la depresión y el abuso de sustancias durante la mayor parte de su vida, desde su niñez. El 20 de julio de 2017 fue encontrado muerto en su casa de Palos Verdes Estates, California; su muerte fue declarada suicidio por ahorcamiento. La revista Hit Parader colocó a Bennington en el puesto 46 de su lista de los «100 mejores vocalistas de metal de todos los tiempos». Bennington ha sido acreditado por varias publicaciones como uno de los mejores vocalistas de rock de su generación. Escribiendo para Billboard, Dan Weiss declaró que Bennington «se volvió universalmente nu metal».';
            break;
        case 'ms':
            $img = './img/Mike.jfif';
            $tag = 'Mike Shinoda: segunda voz, guitarra y teclado';
            $info = 'Michael Kenji «Mike» Shinoda ( /ʃᵻnoʊdə/; en japonés: 篠田 賢治, romanizado: Shinoda Kenji) (Agoura Hills, California, 11 de febrero de 1977) es un músico, cantante, rapero, compositor y productor discográfico estadounidense. Cofundó Linkin Park en 1996 y es el vocalista principal de la banda, además de guitarrista rítmico, teclista, compositor principal y productor. Más tarde, Shinoda creó un proyecto paralelo impulsado por el hip hop, Fort Minor, en 2004. También se desempeñó como productor de pistas y álbumes de Lupe Fiasco, Styles of Beyond y X-Ecutioners. <br><br>Nacido en Panorama City, Los Ángeles, California y criado en Agoura Hills, Shinoda formó Xero, que luego se convirtió en Linkin Park, con dos de sus amigos de la escuela secundaria: Brad Delson y Rob Bourdon en 1996, más tarde se unieron Joe Hahn, Dave Farrell y Mark Wakefield. Chester Bennington se unió a Linkin Park en 1999, reemplazando a Wakefield como vocalista principal. Más tarde, la banda firmó un contrato discográfico con Warner Bros Records. <br><br>Shinoda también es cofundador de Machine Shop Records, un sello discográfico con sede en California. Fuera de la música, Shinoda es artista y diseñador gráfico. Ha pintado varias obras de arte, algunas de las cuales se han presentado en el Museo Nacional Japonés Americano. En 2018, Shinoda lanzó Post Traumatic, que contenía 18 canciones sobre sus sentimientos tras la muerte de su colega y viejo amigo Chester Bennington.';
            break;
        case 'bd':
            $img = './img/Brad.jfif';
            $tag = 'Brad Delson: guitarra principal';
            $info = 'Bradford Phillip Delson, conocido como "BBB (Big Bad Brad)" (1 de diciembre de 1977), es el guitarrista líder de la banda de rock, Linkin Park. También es el A&R de Machine Shop Recordings. <br><br>Brad Delson asistió a la Escuela Superior de Agoura con su amigo de la infancia y compañero de banda Linkin Park, Mike Shinoda. Tocó en varias bandas a lo largo de su carrera en la preparatoria, el más notable grado de ser relativa, en la que conoció y se asoció con el baterista Rob Bourdon. Relative Degree fue simplemente un concierto y, después de alcanzar ese objetivo, se disolvió. Después de graduarse en 1995, Delson, Shinoda, y Bourdon formaron Xero, que eventualmente se convertiría en el punto de partida para Linkin Park. Delson entró en UCLA en 1995 como becario Regent trabajando hacia un título de Licenciada en Ciencias de la Comunicación, con especialización en Negocios y Administración. Fue miembro de Phi Beta Kappa, y compartió un dormitorio con el futuro compañero de banda Linkin Park, Dave Farrell en tres de sus cuatro años en la escuela, Farrell le mostró como tocar el bajo, y así también aprendió como tocar el bajo. Delson también tuvo la oportunidad de hacer una pasantía con un miembro de la industria de la música como parte de sus estudios y terminó trabajando para Jeff Blue, un representante de A & R de Warner Bros. Records, que ofrece una crítica constructiva en los demos de Xero. Blue más tarde introdujo Chester Bennington, que se convertiría en el vocalista de Linkin Park, con el resto de la banda. Después de graduarse en 1999, Delson decidió renunciar a la facultad de derecho con el fin de seguir una carrera musical con Linkin Park. Él sigue siendo un gran fan de todas las cosas azul y oro. Brad es de ascendencia judía.';
            break;
        case 'df':
            $img = './img/Dave.jfif';
            $tag = 'Dave Farrell: bajo';
            $info = 'David Michael Farrell (Plymouth, Massachusetts, 8 de febrero de 1977), más conocido como Phoenix, es el bajista del grupo de rock alternativo estadounidense Linkin Park. Actualmente forma parte del podcast de golf "Member Guest".<br><br>Farrell nació en Plymouth, Massachusetts pero más tarde se mudó a Mission Viejo, California cuando tenía cinco años.[cita requerida] Se graduó en la Universidad de California.[cita requerida] Toca el bajo, la guitarra eléctrica, el chelo y el violín.<br><br>Farrell ha declarado que sus influencias han sido su madre y su hermano Joe, al igual Weezer, The Beatles, Deftones, Pink floyd, Guns N Roses, The Smiths, Hughes y Wagner.[cita requerida] Está casado desde diciembre de 2002 con Linsey Farrell y tienen cuatro hijos.';
            break;
        case 'jh':
            $img = './img/Joe.jfif';
            $tag = 'Joe Hahn: teclado, sintetizador y sampler';
            $info = 'Joseph Hahn, conocido también como Joe Hahn, Chairman Hahn o Mr. Hahn (Dallas, Texas, 15 de marzo de 1977) es un director de videos musicales, también conocido como el DJ en la banda Linkin Park. Joe tiene un alter ego llamado Remy.<br><br>Joseph "Joe" Hahn nació en Dallas, Texas el 15 de marzo de 1977 pero creció en Glendale, California. Hahn es coreano-estadounidense de segunda generación.<br><br>Hahn se graduó de la Herbert Hoover High School en Glendale en 1995. Luego estudió en el Art Center College of Design de Pasadena, pero no se graduó.4​ Hahn se unió a Linkin Park, llamada en ese entonces Xero, en 1997 como el DJ de la banda. Desde entonces, él ha dirigido la mayoría de los videos de la banda (excepto "One Step Closer","Crawling","Faint","Given Up" y "We Made It"). Hahn, junto con su compañero de banda Mike Shinoda, es responsable de la mayor parte de las ilustraciones de los álbumes de Linkin Park. Además, participó con Mike Shinoda en su producción The Rising Tied, del proyecto alterno de Hip Hop Fort Minor. A Joe se le ocurrió el concepto de One Step Closer y ha estado involucrado en todos los demás videos. Él es el director oficial de los videos para la banda.';
            break;
        case 'rb':
            $img = './img/Rob.jfif';
            $tag = 'Rob Bourdon: batería';
            $info = 'Robert Gregory «Rob» Bourdon (Calabasas, California; 20 de enero de 1979) es el baterista de la banda alternativa Linkin Park. Robert Gregory Bourdon nació el 20 de enero de 1979. Rob nació en Calabasas, California y ahora vive en Los Ángeles. Sus padres son Gregory y Patty; tiene un hermano menor llamado Dave. Creció en la misma ciudad que los miembros de Incubus y fue a la escuela con los miembros de Hoobastank.<br><br>Rob comenzó a tocar la batería a la edad de 10 años tras ver un concierto de Aerosmith. Ya que su madre, Patty, fue la exnovia de Joey Kramer, el baterista de Aerosmith, Bourdon pudo estar en el backstage y ver toda la producción. Kramer también dio a Rob un pedal de bombo. A Rob también le gusta tocar piano cuando tiene tiempo. Rob acostumbraba a tomar lecciones cuando era joven y forzado a seguir.';
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
</section>

<?php include('footer.php');?>