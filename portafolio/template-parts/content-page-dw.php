<?php
/**
 * Template part for displaying page content in page-dw.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portafolio
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body  style="background-color: #fff !important;
background-image: url('/wp-content/themes/portafolio/assets/img/fondolila.png') !important;
background-size: cover; background-position: center center; background-attachment: fixed; width:100%;" >
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="portada1 container text-center mt-5">
<div class="row">
  <div class="col-12 col-md-2"><a href="https://amfeliu.laboratoriodiseno.cl/" >
<button class="button-back  ms-5"><!--back-->
  <span>Home</span>
  <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    
    <title>Volver a inicio</title>
    <desc>Created with Sketch.</desc>
    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Rounded" transform="translate(-580.000000, -3436.000000)">
            <g id="Navigation" transform="translate(100.000000, 3378.000000)">
                <g id="-Round-/-Navigation-/-arrow_back" transform="translate(476.000000, 54.000000)">
                    <g transform="translate(0.000000, 0.000000)">
                        <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                        <path d="M19,11 L7.83,11 L12.71,6.12 C13.1,5.73 13.1,5.09 12.71,4.7 C12.32,4.31 11.69,4.31 11.3,4.7 L4.71,11.29 C4.32,11.68 4.32,12.31 4.71,12.7 L11.3,19.29 C11.69,19.68 12.32,19.68 12.71,19.29 C13.1,18.9 13.1,18.27 12.71,17.88 L7.83,13 L19,13 C19.55,13 20,12.55 20,12 C20,11.45 19.55,11 19,11 Z" id="🔹-Icon-Color" fill="#ffffff"></path>
                    </g>
                </g>
            </g>
        </g>
    </g>
</svg>
</button></a><!--back--></div>
  <div class="col-12 col-md-8 align-items-center ">  <?php if( get_field('fondo') ): ?>
   <img src="<?php the_field('fondo'); ?>"class="img-fluid" width="500px" />
<?php endif; ?></div>
  <div class="col-12 col-md-2"></div>

</div>

 
</div>

<div class="container-fluid text-center "><!--trabajos-->


    <div class="row "><!--row-->
 <!--
 <div class="col-12  mb-5 mt-5 d-flex justify-content-evenly">
   
   <div class="pestaña1">
   
   <?php if( get_field('examen') ): ?>
   <img src="<?php the_field('examen'); ?>"class="img-fluid mt-2"  width="320px" />
   <?php endif; ?>
   <div class="row">
   <a href="https://amfeliu.laboratoriodiseno.cl/et" target="_blank">
   <button class="demo mt-3">
   Demo
   <div class="hoverEffect">
   <div>
   </div>
   </div></button>
   </a>
   </div>
   
   </div>
   
   </div>
    examen--> 

 <!--SEREFIMERA-->
<div class="col-12 col-md-4 mb-5 mt-5 d-flex justify-content-evenly"><!--col3-->
   
<div class="pestaña1">

<?php if( get_field('efimera') ): ?>
<img src="<?php the_field('efimera'); ?>"class="img-fluid mt-2"  width="350px" />
<?php endif; ?>
<div class="row">
<a href="https://amfeliu.laboratoriodiseno.cl/tienda/" target="_blank">
<button class="demo mt-3">
Demo
<div class="hoverEffect">
<div>
</div>
</div></button>
</a>
</div>

</div>

</div><!--col3-->
 <!--SEREFIMERA--> 

<!--TESLA-->
    <div class="col-12 col-md-4 mb-5 mt-5 d-flex justify-content-evenly"><!--col3-->
   
<div class="pestaña1">

<?php if( get_field('polok') ): ?>
<img src="<?php the_field('polok'); ?>"class="img-fluid mt-2"  width="350px" />
<?php endif; ?>
<div class="row">
<a >
<button class="demo mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal3">
Demo
<div class="hoverEffect">
<div>
</div>
</div></button>
</a>
</div>

</div>

</div><!--col3-->
<!--TESLA--> 

<!--MODAL TESLA--> 
<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header modal-fondo">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo esc_html( get_field('mo-title') ); ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
     <?php if( get_field('tesla1') ): ?>
<img src="<?php the_field('tesla1'); ?>"class="img-fluid" />
<?php endif; ?>
     </div>
     <div class="row">
     <?php if( get_field('tesla2') ): ?>
<img src="<?php the_field('tesla2'); ?>"class="img-fluid" />
<?php endif; ?>
     </div>
     <div class="row">
     <?php if( get_field('tesla3') ): ?>
<img src="<?php the_field('tesla3'); ?>"class="img-fluid" />
<?php endif; ?>
     </div>
     <div class="row">
     <?php if( get_field('tesla4') ): ?>
<img src="<?php the_field('tesla4'); ?>"class="img-fluid mb-3" />
<?php endif; ?>
     </div>
      </div>
      
    </div>
  </div>
</div>
<!--MODAL TESLA--> 

<!--AXIT-->  
<div class="col-12 col-md-4 mb-5 mt-5 d-flex justify-content-evenly"><!--col3-->
   
<div class="pestaña1">

<?php if( get_field('axit') ): ?>
<img src="<?php the_field('axit'); ?>"class="img-fluid mt-2"  width="350px" />
<?php endif; ?>
<div class="row">
<a href="https://amfeliu.laboratoriodiseno.cl/axit" target="_blank">
<button class="demo mt-3">
Demo
<div class="hoverEffect">
<div>
</div>
</div></button>
</a>
</div>

</div>

</div><!--col3-->
<!--AXIT--> 

</div><!--trabajos-->




</article><!-- #post-<?php the_ID(); ?> -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
<footer class="text-center fixed-bottom ">
 Derechos Reservados Amelia Feliu 2023.
</footer>
</html>
