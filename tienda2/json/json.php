<?php
      include("conexion.php");
      $query = "SELECT * FROM productos WHERE 1  ORDER BY fecha DESC";
      $resource = $conn->query( $query );
        if($total = $resource->num_rows){
            while ($row = $resource->fetch_assoc()){
                $todas[]=$row;
            }
        echo json_encode($todas);
        }
    ?>
 