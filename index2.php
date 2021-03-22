<html lang="es">

    <body>
        <header><?php echo "Nueva pagina"; ?></header>
                <br>
            <a href="index.php">Pagina Inicial</br></a>
    </body>
</html>
<?php

$calificacion=15;

/*Forma comun de escribir un if con {}*/
if($calificacion==19 || $calificacion==20){
    echo "La calificacion es A";
}elseif ($calificacion>=16 && $calificacion<=18){
    echo "La calificacion es B";
}elseif ($calificacion>=13 && $calificacion<=15){
    echo "La calificacion es C";
}elseif ($calificacion>=10 && $calificacion<=12){
    echo "La calificacion es D";
}elseif ($calificacion>=1 && $calificacion<=9){
    echo "La calificacion es E";
}else{
    echo "La nota no esta dentro del rango";
}
?>
<br>
<?php

/*Segunda forma de escribir un if sin {}*/
if($calificacion==19 || $calificacion==20):
    echo "La calificacion es A"."</br>";
elseif ($calificacion>=16 && $calificacion<=18):
    echo "La calificacion es B"."</br>";
elseif ($calificacion>=13 && $calificacion<=15):
    echo "La calificacion es C"."</br>";
elseif ($calificacion>=10 && $calificacion<=12):
    echo "La calificacion es D"."</br>";
elseif ($calificacion>=1 && $calificacion<=9):
    echo "La calificacion es E"."</br>";
else:
    echo "La nota no esta dentro del rango"."</br>";
endif;

$calificacion=11;
/*Tercera forma de escribir un if con un OPERADOR TERNARIO*/
echo "La calificacion es: ".(($calificacion==19 || $calificacion==20)? "A":
                                (($calificacion>=16 && $calificacion<=18)? "B":
                                    (($calificacion>=13 && $calificacion<=15)? "C":
                                        (($calificacion>=10 && $calificacion<=12)? "D":
                                            (($calificacion>=1 && $calificacion<=9)? "E":
                                                "La nota no esta dentro del rango")))))."</br>";

/*Funcion empty: determina si una variable esta vacia*/
$nombre="Carlos";
var_dump($nombre);
var_dump(empty($nombre));
if (!empty($nombre)){
    echo "Su nombre es: ". $nombre."</br>";
}else{
    echo "El nombre esta vacio"."</br>";
}

/*El simbolo de asignar un valor por defecto si no existe uno (??)*/
$nombre=null;
echo "Su nombre es: ".($nombre ?? "Sin nombre")."</br>";
/*Ciclo while*/
$n=10;
while ($n >=1){
    echo $n."</br>";
    $n--;
}
/*Ciclo do while*/
$n=10;
do{
    echo $n."</br>";
    $n--;
}while($n>=1);

/*Ciclo for*/
for ($i=10;$i>=1;$i--){
    echo $i."</br>";
    if ($i==5){
        break;/*break finaliza la ejecucion de la estructura for,foreach,while,do while o switch en curso*/
    }
}
/*Ciclo foreach*/
$arrayNombres = [ "Diego","Juan","Pedro","Luis","Carlos" ];

foreach ($arrayNombres as $nombre){
    if($nombre == "Pedro"):
        break;
    endif;
    echo $nombre."</br>";
}
/*Mostrar los datos de un array como un foreach pero con un for*/
for ($i=0;$i < count($arrayNombres);$i++){
    echo $arrayNombres[$i]."</br>";
}

$nombre="20"."10";
var_dump((bool)$nombre);/*Para ver(duda al ingeniero)*/
echo $nombre;



?>

