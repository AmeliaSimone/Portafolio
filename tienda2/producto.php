<?php
  require_once("conexion.php");
 $query="SELECT * FROM productos where 1 AND id=$_POST[miid]";
 $resource=$conn->query($query);
$total=$resource->num_rows;
$row=$resource->fetch_assoc();
foreach($row as $unkey=> $unvalue){
    $row[$unkey]=utf8_encode($unvalue);
}
echo json_encode($row);


?>

      