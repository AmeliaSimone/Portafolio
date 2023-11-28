<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portafolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
</head>
<body style="background-color: #fff !important;
background-image: url('/wp-content/themes/portafolio/assets/img/fondobeige.png') !important;
background-size: cover; background-position: center center; background-attachment: fixed; width:100%;">

    <!--portada-->
    <section>
    <div class="container text-center">
   
	<?php if( get_field('fondo') ): ?>
   <img src="<?php the_field('fondo'); ?>"class="img-fluid" width="800px" />
<?php endif; ?>
    </div>
    </section>
    <!--portada-->

<!-- Modal -->
<section class="text-center mb-5">
<!-- Button trigger modal -->
<button type="button" class="boton" data-bs-toggle="modal" data-bs-target="#exampleModal">
<?php echo esc_html( get_field('conoceme') ); ?>
</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
    <div class="modal-header modal-fondo">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Conóceme</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
      <div class="modal-body">
        <h1><?php echo esc_html( get_field('amelia') ); ?></h1>
		<h2><?php echo esc_html( get_field('front') ); ?></h2>
		<div class="row align-items-center"><!--row-->

			<div class="col-12 col-md-4 me-4"><!--col-->
			<?php if( get_field('foto') ): ?>
            <img src="<?php the_field('foto'); ?>"class="img-fluid"  width="300px"  />
            <?php endif; ?>
			</div><!--col-->

      <div class="col-12 col-md-8  mt-5 bio "><!--col-->
            <p class="text-start parrafo1  mt-5 pt-5 align-items-center"><?php echo esc_html( get_field('bio') ); ?></p>
			</div><!--col-->

		</div><!--row-->
        <h3 class="text-center mt-4"><?php echo esc_html( get_field('skills') ); ?></h3>
		<div class="row"><!--row2-->
            <div class="col-12 col-md-6  d-flex justify-content-evenly">
			<div class="card mb-5">
  
  <div class="body ">
    <div class="skill">
      <div class="skill-name">HTML</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 85%"></div>
      </div>
      <div class="skill-percent-number">85%</div>
    </div>
    <div class="skill">
      <div class="skill-name">CSS</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 70%"></div>
      </div>
      <div class="skill-percent-number">70%</div>
    </div>
    <div class="skill">
      <div class="skill-name">Bootstrap</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 70%"></div>
      </div>
      <div class="skill-percent-number">70%</div>
    </div>
    <div class="skill">
      <div class="skill-name">Adobe XD</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 60%"></div>
      </div>
      <div class="skill-percent-number">60%</div>
    </div>
    <div class="skill">
      <div class="skill-name">JavaScript</div>
      <div class="skill-level">
        <div class="skill-percent" style="width:60%"></div>
      </div>
      <div class="skill-percent-number">60%</div>
    </div>
    <div class="skill">
      <div class="skill-name">Wordpress</div>
      <div class="skill-level">
        <div class="skill-percent" style="width:60%"></div>
      </div>
      <div class="skill-percent-number">60%</div>
    </div>
    <div class="skill">
      <div class="skill-name">PHP</div>
      <div class="skill-level">
        <div class="skill-percent" style="width:40%"></div>
      </div>
      <div class="skill-percent-number">40%</div>
    </div>
  </div>
</div>

            </div>


            <div class="col-12 col-md-6  d-flex justify-content-evenly">
			<div class="card mb-5">
 
  <div class="body ">
    <div class="skill">
      <div class="skill-name">JQuery</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 40%"></div>
      </div>
      <div class="skill-percent-number">40%</div>
    </div>
    <div class="skill">
      <div class="skill-name">Json</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 30%"></div>
      </div>
      <div class="skill-percent-number">30%</div>
    </div>
    <div class="skill">
      <div class="skill-name">API REST</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 30%"></div>
      </div>
      <div class="skill-percent-number">30%</div>
    </div>
    <div class="skill">
      <div class="skill-name">Illustrator</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 30%"></div>
      </div>
      <div class="skill-percent-number">30%</div>
    </div>
    <div class="skill">
      <div class="skill-name">MySQL</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 30%"></div>
      </div>
      <div class="skill-percent-number">30%</div>
    </div>
    <div class="skill">
      <div class="skill-name">Python</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 20%"></div>
      </div>
      <div class="skill-percent-number">20%</div>
    </div>
    <div class="skill">
      <div class="skill-name">C#</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 15%"></div>
      </div>
      <div class="skill-percent-number">15%</div>
    </div>
  </div>
</div>
            </div>
		</div><!--row2-->

    <div class="row"><!--row3-->
    <div class="col-12 col-md-4"></div>
    <div class="col-12 col-md-4"> <?php if( get_field('gato') ): ?>
   <img src="<?php the_field('gato'); ?>"class="img-fluid" width="200px" />
<?php endif; ?></div>
    <div class="col-12 col-md-4"></div>
   
    </div><!--row3-->

      </div><!--body-->


      <div class="modal-footer futer-modal">
      <h3 class="text-center"><?php echo esc_html( get_field('contacto') ); ?></h3>
		<div class="social-links">
		<div id="twitter" class="social-btn flex-center">
      <a href="https://wa.link/i0714j" target=”_blank”>
    <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48Z" fill="#25D366"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M24.7911 37.3526H24.7852C22.3967 37.3517 20.0498 36.7525 17.9653 35.6155L10.4 37.6L12.4246 30.2049C11.1757 28.0406 10.5186 25.5855 10.5196 23.0703C10.5228 15.2017 16.9248 8.80005 24.7909 8.80005C28.6086 8.8017 32.1918 10.2879 34.8862 12.9855C37.5806 15.6829 39.0636 19.2684 39.0621 23.0816C39.059 30.9483 32.6595 37.3494 24.7911 37.3526ZM18.3159 33.0319L18.749 33.289C20.5702 34.3697 22.6578 34.9416 24.7863 34.9424H24.7911C31.3288 34.9424 36.6499 29.6212 36.6525 23.0807C36.6538 19.9113 35.4212 16.9311 33.1817 14.689C30.9422 12.4469 27.964 11.2116 24.7957 11.2105C18.2529 11.2105 12.9318 16.5312 12.9292 23.0711C12.9283 25.3124 13.5554 27.4952 14.7427 29.3837L15.0248 29.8325L13.8265 34.2096L18.3159 33.0319ZM31.4924 26.1541C31.7411 26.2743 31.9091 26.3555 31.9808 26.4752C32.0699 26.6239 32.0699 27.3378 31.7729 28.1709C31.4756 29.0038 30.051 29.764 29.3659 29.8664C28.7516 29.9582 27.9741 29.9965 27.1199 29.7251C26.602 29.5608 25.9379 29.3414 25.0871 28.9739C21.7442 27.5305 19.485 24.2904 19.058 23.6781C19.0281 23.6352 19.0072 23.6052 18.9955 23.5896L18.9927 23.5858C18.804 23.334 17.5395 21.6469 17.5395 19.9008C17.5395 18.2583 18.3463 17.3974 18.7177 17.0011C18.7432 16.9739 18.7666 16.9489 18.7875 16.9261C19.1144 16.5691 19.5007 16.4798 19.7384 16.4798C19.9761 16.4798 20.2141 16.482 20.4219 16.4924C20.4475 16.4937 20.4742 16.4936 20.5017 16.4934C20.7095 16.4922 20.9686 16.4907 21.2242 17.1046C21.3225 17.3408 21.4664 17.6911 21.6181 18.0605C21.9249 18.8075 22.264 19.6328 22.3236 19.7523C22.4128 19.9308 22.4722 20.1389 22.3533 20.377C22.3355 20.4127 22.319 20.4464 22.3032 20.4786C22.2139 20.6608 22.1483 20.7949 21.9967 20.9718C21.9372 21.0414 21.8756 21.1164 21.814 21.1914C21.6913 21.3408 21.5687 21.4902 21.4619 21.5966C21.2833 21.7744 21.0975 21.9673 21.3055 22.3243C21.5135 22.6813 22.2292 23.849 23.2892 24.7945C24.4288 25.8109 25.4192 26.2405 25.9212 26.4583C26.0192 26.5008 26.0986 26.5353 26.1569 26.5644C26.5133 26.743 26.7213 26.7131 26.9294 26.4752C27.1374 26.2372 27.8208 25.4339 28.0584 25.077C28.2961 24.7201 28.5339 24.7796 28.8607 24.8985C29.1877 25.0176 30.9408 25.8802 31.2974 26.0586C31.367 26.0935 31.4321 26.125 31.4924 26.1541Z" fill="#FDFDFD"/>
</svg></a><span>+569 67585330</span>
		</div>


    <div id="linkedin" class="social-btn flex-center">
      <a href="https://www.linkedin.com/in/amelia-simone-feliu-pavez-1b333a205/" target=”_blank”>
			<svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"></path></svg></a><span>linkedin.com/in/amfeliu</span>
		</div>


    <div id="twitter" class="social-btn flex-center">
      
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<rect x="64" y="64" style="fill:#ECEFF1;" width="384" height="384"/>
<polygon style="fill:#CFD8DC;" points="256,296.384 448,448 448,148.672 "/>
<path style="fill:#F44336;" d="M464,64h-16L256,215.616L64,64H48C21.504,64,0,85.504,0,112v288c0,26.496,21.504,48,48,48h16V148.672
	l192,147.68L448,148.64V448h16c26.496,0,48-21.504,48-48V112C512,85.504,490.496,64,464,64z"/>

</svg>
</svg><span>Amelia.feliu06@gmail.com</span>
		</div>


    <div id="linkedin" class="social-btn flex-center">
      <a href="/wp-content/themes/portafolio/assets/doc/CVAmeliaFP.pdf"  download="CVAmeliaFP.pdf">
      <svg height="24" width="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g id="Icon"><path d="M20.179,20.857l-0,-17.714c-0,-1.046 -0.848,-1.893 -1.893,-1.893l-12.572,0c-1.045,0 -1.893,0.847 -1.893,1.893l0,17.714c0,1.046 0.848,1.893 1.893,1.893l12.572,-0c1.045,-0 1.893,-0.847 1.893,-1.893Zm-1.5,-17.714l-0,17.714c-0,0.217 -0.176,0.393 -0.393,0.393c-0,-0 -12.572,0 -12.572,0c-0.217,-0 -0.393,-0.176 -0.393,-0.393c0,0 0,-17.714 0,-17.714c0,-0.217 0.176,-0.393 0.393,-0.393c0,0 12.572,0 12.572,0c0.217,0 0.393,0.176 0.393,0.393Z"/><path d="M12,4.107c-1.36,0 -2.464,1.104 -2.464,2.464c-0,1.361 1.104,2.465 2.464,2.465c1.36,-0 2.464,-1.104 2.464,-2.465c0,-1.36 -1.104,-2.464 -2.464,-2.464Zm0,1.5c0.532,0 0.964,0.432 0.964,0.964c0,0.533 -0.432,0.965 -0.964,0.965c-0.532,-0 -0.964,-0.432 -0.964,-0.965c-0,-0.532 0.432,-0.964 0.964,-0.964Z"/><path d="M15.711,12.234l-0,-0.971c-0,-0.748 -0.442,-1.427 -1.126,-1.73c-0.517,-0.229 -1.138,-0.504 -1.138,-0.504c-0.096,-0.043 -0.199,-0.065 -0.304,-0.065l-2.286,0c-0.116,0 -0.231,0.027 -0.335,0.079c-0,0 -0.528,0.264 -0.979,0.49c-0.642,0.321 -1.047,0.976 -1.047,1.693l0,1.008c0,0.414 0.337,0.75 0.75,0.75c0.414,0 0.75,-0.336 0.75,-0.75l0,-1.008c0,-0.149 0.085,-0.285 0.218,-0.351l0.82,-0.411c0,0 1.95,0 1.95,0c0,0 0.993,0.44 0.993,0.44c0.142,0.063 0.234,0.204 0.234,0.359l-0,0.971c-0,0.414 0.336,0.75 0.75,0.75c0.414,0 0.75,-0.336 0.75,-0.75Z"/><path d="M9.714,16.464l4.572,0c0.414,0 0.75,-0.336 0.75,-0.75c-0,-0.414 -0.336,-0.75 -0.75,-0.75l-4.572,0c-0.414,0 -0.75,0.336 -0.75,0.75c0,0.414 0.336,0.75 0.75,0.75Z"/><path d="M8.571,19.321l6.858,0c0.414,0 0.75,-0.336 0.75,-0.75c-0,-0.414 -0.336,-0.75 -0.75,-0.75l-6.858,0c-0.414,0 -0.75,0.336 -0.75,0.75c0,0.414 0.336,0.75 0.75,0.75Z"/></g></svg>
			</a><span>Descargar CV</span>
		</div>

   
</div>
      </div>

   
    </div>
  </div>
</div>
</section>

<div class="container">
  <div class="row">
  <div class="col-12 col-md-6 d-flex justify-content-evenly  mb-5">
    <a href="https://amfeliu.laboratoriodiseno.cl/uxui">
    <button class="button-n">
  <span class="span">	<?php if( get_field('') ): ?>
    <img src="<?php the_field(''); ?>"class="img-fluid" width="155" />
<?php endif; ?>UX/UI</span>
  <span class="span">Ver Proyectos</span>
</button>
</a>
    </div>

    <div class="col-12 col-md-6 d-flex justify-content-evenly  mb-5">
      <a href="https://amfeliu.laboratoriodiseno.cl/desarrollo-web">
    <button class="button-n">
  <span class="span"><?php if( get_field('') ): ?>
    <img src="<?php the_field(''); ?>"class="img-fluid" width="175" />
<?php endif; ?>Desarrollo Web</span>
  <span class="span">Ver Proyectos</span>
</button>
</a>
    </div>

    <!--<div class="col-12 col-md-4 d-flex justify-content-evenly  mb-5">
    <a href="https://amfeliu.laboratoriodiseno.cl/">
    <button class="button-n">
  <span class="span">	<?php if( get_field('qa') ): ?>
    <img src="<?php the_field('qa'); ?>"class="img-fluid" width="155" />
<?php endif; ?></span>
  <span class="span">Proximamente disponible</span>
</button>
</a>
    </div>-->


  </div>
</div>


      




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
<footer class="text-center fixed-bottom">
Derechos Reservados Amelia Feliu 2023.
</footer>
</article><!-- #post-<?php the_ID(); ?> -->
