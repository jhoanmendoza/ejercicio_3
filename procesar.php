<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
    
</head>
<body>
<table border=2px align=center>
<tr><td>N</td><td>Cuadrado</td><td >Cubo</td></tr>
<?php
    $N=$_GET['N'];
    for ($i=1;$i<=$N;$i++){
         print  "<tr> ";
         print  "<td> $i </td>"; 
         printf ("<td> %d </td>", $i*$i); 
         printf ("<td> %d </td>", $i*$i*$i); 
         print  "</tr> ";
    }
?>
</table>

</body>
</html>