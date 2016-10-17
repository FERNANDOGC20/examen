<?php
session_start();
include 'conecta.php';
$alumno=$_POST['alumno'];
$query="select id from alumnos where nombre='$alumno'";
$resultado=mysql_query($query);
if($campo=mysql_fetch_array($resultado))
{
    if($campo['alumno']==0);
    {
      $_SESSION['Fernando']=0;
      header('location:admin.php');
    }
    elseif ($campo['tipo']==1) {
      $_SESSION['estudiante']=1;
      header('location:estudiante.php');
    }
}

