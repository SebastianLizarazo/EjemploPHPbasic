<?php
$nombre = "Sebastian";

if ($nombre== "Diego"){
      echo "Hola Diego";
}else if ($nombre == "Juan"){
      echo "Hola Juan";
}else{
    echo "Holaaa  $nombre";
}
?>
  <h1>Usuario dueño</h1>
<?php if ($nombre == "Sebastian"){ ?>
       <h1>Hola usuario <?php echo $nombre; ?></h1>
<?php }else{ ?>
       <h1>No hay usuario dueño</h1>
<?php } ?>
