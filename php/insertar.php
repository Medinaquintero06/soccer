<?php
console_log("Funcion insertar");
require_once('conexion.php');
$Equipo=$_POST ['boxequipo'];
$Puntos=$_POST['boxpuntos'];
$PJ=$_POST['boxpj'];
$GF=$_POST['boxgf'];
$GC=$_POST['boxgc'];
$DG=$_POST['boxdg'];
print "<p>el equipo es $nequipo</p>\n";
print "<p>los puntos son $puntos</p>\n";
print "<p>los partidos jugados son $pj</p>\n";
print "<p>los goles a favor son $gf</p>\n";
print "<p>los goles en contra son $gc</p>\n";
print "<p>la diferencia de gol es $dg</p>\n";


/*
$sql=("INSERT INTO ´personas´ (´equipo´, ´puntos´, ´pj´, ´gf´, ´gc´,´dg´,
VALUES (´$equipo´, ´$puntos´, ´$pj´, ´$gf´, ´$gc´, ´$dg´, 

//ejecutar el query en la base de datos mediante la conexion
if (mysqli_query($conn,$sql)) {
    echo "Exito en la insercion";
    header("Location: ../index.html", TRUE,301);
    exit();
    mysqli_close($conn);
} else{
    echo "Error": " . $sql . "<br>" . mysqli_error($conn);    
}*/
?>