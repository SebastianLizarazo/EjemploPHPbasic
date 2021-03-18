<?php
$nombre = "Sebastian";
var_dump($nombre);
echo gettype($nombre)."</br>" ;

$nombre = 2;
var_dump($nombre);
echo gettype($nombre)."</br>" ;

$nombre= 10+"20"."</br>";
var_dump($nombre);
echo $nombre;

if ($nombre== "Diego"){
      echo "Hola Diego";
}else if ($nombre == "Juan"){
      echo "Hola Juan";
}else{
    echo "Wasaaa  $nombre";
}
$nombre=0;
var_dump((bool)$nombre);


$nombre=(bool)"231321";//Conversion implicita
echo $nombre;
var_dump($nombre);

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
foreach ($arrayUsuarios as $usuario) {
    echo $usuario['Nombre'] . "</br>";
}
?>

  <h1>Usuario dueño</h1>
<?php if ($nombre == "Sebastian"){ ?>
       <h1>Hola <?php echo $nombre; ?></h1>
<?php }else{ ?>
       <h1>No hay ningun usuario dueño</h1>
<?php } ?>

<?php

class usuario{
    //boolean, integer, float, string
    // array, object, callable, iterable
    // resource y null
    private string $nombre = "Sebastian";
}