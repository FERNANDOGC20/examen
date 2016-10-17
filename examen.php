<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>examen</title>
  <link rel="stylesheet" href="estilo.css">
  <nav>
  	<ul>
  		<li>calificaciones</li>
  	</ul>
  </nav>
</head>
<body>
 <table>
   <thead>
     <th>Preguntas</th>
   </thead>
   <tbody>
   <tr>
     <td>id</td>
     <td>preguntas</td>
   </tr>
<?php
include 'conecta.php';
$alumno=$_POST['alumno'];
$query="insert into alumnos(alumno)values('$alumno')";
$query="select * from preguntas";
$resultado=mysql_query($query);
while($campos=mysql_fetch_array($resultado)){
?>
  <tr>
    <td><?php echo $campos['id'];?></td>
    <td><?php echo $campos['pregunta'];?></td>
  </tr>
<?php
  }
?>
   </tbody>
 </table>
 <section class="dos">
 	<table>
 		<thead>
 			<th>respuestas</th>
 		</thead>
 		<tbody>
 			<tr>
 				<td>id_pregunta</td>
 				<td>A</td>
 				<td>B</td>
 				<td>C</td>
 				<td>D</td>
 			</tr>
<?php
include 'conecta.php';
$query="select * from respuestas";
$resultado=mysql_query($query);
while($campos=mysql_fetch_array($resultado)){
?>
  <tr>
    <td><?php echo $campos['id_pregunta'];?></td>
    <td><?php echo $campos['A'];?><input type="radio" id="A"></td>
    <td><?php echo $campos['B'];?><input type="radio" id="B"></td>
    <td><?php echo $campos['C'];?><input type="radio" id="C"></td>
    <td><?php echo $campos['D'];?><input type="radio" id="D"></td>
  </tr>
<?php
  }
?>
 		</tbody>
 	</table>
 </section> 
</body>
<script src="jquery.js"></script>
<script type="text/javascript" src="codigo.js"></script>
</html>