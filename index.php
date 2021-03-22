<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP basico</title>

    <link href="estilo.css" rel="stylesheet">
</head>
 <body>
  <header>Variables y Arreglos</header>
  <form action="index.php" method="get">
      <label for="name">Nombre</label>
          <input type="text" name="name" id="name">
          <button type="submit">Enviar</button>
  </form>
 </body>
</html>
<h3>Variable sencilla</h3>
<?php
$nombre = "Sebastian";
var_dump($nombre);
echo gettype($nombre)."</br>" ;
?>
<h3>Varaiable y su tipo de dato</h3>
<?php
$nombre = 2.3;
var_dump($nombre);
echo gettype($nombre)."</br>" ;
?>
<h3>Variable con valor concatenado</h3>
<?php
$nombre= 10+"20";/*El mas es porque esta sumando esos dos valores mas no concatenandolos*/
var_dump($nombre);
echo $nombre."</br>";
echo gettype($nombre);
?>
<h3>Conversion de datos</h3>
    <?php
    $nombre=8;
    var_dump((bool)$nombre);

    ?>
<h3>Conversion Implicita</h3>
    <?php
    $nombre=(bool)"231321";//Conversion implicita (duda al ingeniero de como funciona o para que es)
    echo $nombre;
    var_dump($nombre);
    ?>
<h4>Arreglos y matrices</h4>
    <?php
    $arrayUsuarios= array(
           [
            "Nombre"=> "Diego Ojeda",
            "Edad"=>19,
            "Ciudad"=>"Sogamoso",
            "Peso"=>55.8,
            "Administrador"=> false
           ],
           [
            "Nombre" =>"Carlos Ramirez",
            "Edad"=>65,
            "Ciudad"=>"Medellin",
            "Peso"=>80.8,
            "Administrador"=> True
           ]
    );
    var_dump($arrayUsuarios);
    ?>
<section>
       <article>
           <h2>Los valores del arreglo en la casilla Nombre</h2>
           <?php foreach ($arrayUsuarios as $usuario) {
                     echo $usuario['Nombre'] . "</br>";
                   } ?>
       </article>
</section>


<h1>Usuario dueño</h1>
<?php if ($nombre === "Sebastian"){ ?>
       <h1>Hola <?php echo $nombre; ?></h1>
<?php }else{ ?>
       <h1>No hay ningun usuario dueño</h1>
<?php } ?>

<?php

if ($nombre=="Diego"){
    echo "Hola Diego";
}else if ($nombre == "Juan"){
    echo "Hola Juan";
}else{
    echo "Wasaaa  $nombre";
}

class usuario{
    //boolean, integer, float, string
    // array, object, callable, iterable
    // resource y null
    private string $nombre = "Sebastian";
}

?>
<a href="index2.php">Siguiente pagina</a>
<footer><?php echo $nombre;?>&copy;</footer>
