<?php
  include("conexion.php");
$q="SELECT * FROM productos WHERE 1  ORDER BY fecha DESC";
$r=$conn->query($q);

?>


<div class="container"   >
  <div class="row">


    <?php while($row=$r->fetch_assoc()){?>
    <div class="col-12 col-md-2" >
    <div class="card mb-5"  >
      <img src="img/<?php echo $row['codigo']?>.png"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['nombre']?></h5>
        <p class="card-text text-center"><?php echo $row['frase_promocional']?>.</p>
        <p class="card-text text-center"><?php echo $row['categoria']?>.</p>
        <p class="text-right text-center precio">$ <?php echo $row['precio']?></p>

<button type="button"  data-bs-target="#exampleModal" data-bs-toggle="modal" class="ov-btn-grow-spin ver" data-miid="<?php echo $row['id']?>">Ver más</button>
    
      </div>
    </div>
</div>
<?php }?>
</div>
</div>