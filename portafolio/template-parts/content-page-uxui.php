<?php
/**
 * Template part for displaying page content in page-uxui.php
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
    <title>UX/UI</title>
</head>

<body  style="background-color: #fff !important;
background-image: url('/wp-content/themes/portafolio/assets/img/fondorosa.png') !important;
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



<div class="row"><!--row-->

 <!--Guia de estilos-->
<div class="col-12 col-md-4 mb-5 mt-5  d-flex justify-content-evenly"><!--col3-->
   
<div class="pestaña1">

<?php if( get_field('guias') ): ?>
<img src="<?php the_field('guias'); ?>"class="img-fluid mt-2"  width="350px" />
<?php endif; ?>
<div class="row">
<a>
<button class="demo mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal1">
Demo
<div class="hoverEffect">
<div>
</div>
</div></button>
</a>
</div>

</div>

</div><!--col3-->
 <!--Guia de estilos--> 

 <!--MODAL Guia de estilos--> 
 <!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header modal-fondo">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo esc_html( get_field('mo-title') ); ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php if( get_field('guia-img') ): ?>
<img src="<?php the_field('guia-img'); ?>"class="img-fluid mb-5" />
<?php endif; ?>
      </div>
     
    </div>
  </div>
</div>
 <!--MODAL Guia de estilos--> 

<!--WIREFRAME-->
 <div class="col-12 col-md-4 mb-5 mt-5 d-flex justify-content-evenly"><!--col3-->
   
<div class="pestaña1">

<?php if( get_field('wire') ): ?>
<img src="<?php the_field('wire'); ?>"class="img-fluid mt-2"  width="350px" />
<?php endif; ?>
<div class="row">
<a>
<button class="demo mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal2">
Demo
<div class="hoverEffect">
<div>
</div>
</div></button>
</a>
</div>

</div>

</div><!--col3-->
<!--WIREFRAME-->   

<!--MODAL WIREFRAME--> 
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header modal-fondo">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo esc_html( get_field('mo-title2') ); ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <div class="row">
     <?php if( get_field('wire1') ): ?>
<img src="<?php the_field('wire1'); ?>"class="img-fluid" />
<?php endif; ?>
     </div>
     <div class="row">
     <?php if( get_field('wire2') ): ?>
<img src="<?php the_field('wire2'); ?>"class="img-fluid" />
<?php endif; ?>
     </div>
     <div class="row">
     <?php if( get_field('wire3') ): ?>
<img src="<?php the_field('wire3'); ?>"class="img-fluid" />
<?php endif; ?>
     </div>
     <div class="row">
     <?php if( get_field('wire4') ): ?>
<img src="<?php the_field('wire4'); ?>"class="img-fluid" />
<?php endif; ?>
     </div>
     <div class="row">
     <?php if( get_field('wire5') ): ?>
<img src="<?php the_field('wire5'); ?>"class="img-fluid" />
<?php endif; ?>
     </div>
     <div class="row">
     <?php if( get_field('wire6') ): ?>
<img src="<?php the_field('wire6'); ?>"class="img-fluid" />
<?php endif; ?>
     </div>
     <div class="row">
     <?php if( get_field('wire7') ): ?>
<img src="<?php the_field('wire7'); ?>"class="img-fluid mb-5" />
<?php endif; ?>
     </div>





      </div>
      
    </div>
  </div>
</div>
<!--MODAL WIREFRAME--> 

<!--XD-->  
<div class="col-12 col-md-4 mb-5 mt-5 d-flex justify-content-evenly"><!--col3-->
   
<div class="pestaña1">

<?php if( get_field('xd') ): ?>
<img src="<?php the_field('xd'); ?>"class="img-fluid mt-2"  width="350px" />
<?php endif; ?>
<div class="row">
<a href="https://xd.adobe.com/view/e67115f7-236b-4898-b4d1-9313df4885ad-b322/" target="_blank">
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
<!--XD--> 

<!--MODAL XD--> 

<!--MODAL XD--> 

</div><!--trabajos-->




</article><!-- #post-<?php the_ID(); ?> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
<footer class="text-center fixed-bottom">
Derechos Reservados Amelia Feliu 2023.
</footer>
</footer>

</html>
