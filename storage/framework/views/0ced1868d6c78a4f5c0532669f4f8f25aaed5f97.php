<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>

  <title> <?php echo app('translator')->getFromJson('pagina.slogan'); ?> </title>

    <!-- Flex Slider -->
    <link rel="stylesheet" href="assets/css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.min.css">
    <?php echo $__env->make('front.partials._menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Custom styles for this template -->

</head>
<body class="homepage">

    <!-- Preloader -->
    <div class="loader-wrapper">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>

    <!-- Page Wrapper -->
    <div class="wrapper">

        <!-- Header Section -->
        <header>
            <div class="header-area">

                <?php echo $__env->make('front.partials._menuHome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </header>
      <main class="main">
<!-- Seção do Banner -->
          <?php if(count($banners) > 0): ?>
            <section class="home-slider">
                <div class="flexslider">
                    <ul class="slides">
                        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="has-overlay">
                            <img src="uploads/banners/<?php echo e($banner->caminho); ?>" alt="Slider 1" />
                            <div class="slider-content">
                                <div class="container">
                                    <h2><?php echo e($banner->texto); ?></h2>
                                    <?php if($banner->link!=''): ?>
                                      <a href="<?php echo e($banner->link); ?>" class="btn primary-btn"> <?php echo e($banner->textobotao); ?> <i class="fa fa-angle-right"></i> </a>
                                    <?php endif; ?>
                              </div>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                </div>
            </section>
          <?php endif; ?>
<!-- QUEM SOMOS PT 1 -->
            <section class="home-company" id="sobre">
                <div class="container">
                    <div class="row company">
                        <div class="col-md-5 col-sm-12">
                            <div class="company-details">
                                <h2 class="company-title color-title"><?php echo app('translator')->getFromJson('pagina.secao1'); ?></h2>
                                <?php
                                $i=0;
                                $lines = explode("\n", $quemsomos->quemsomos); // or use PHP PHP_EOL constant
                                if ( !empty($lines) )
                                  foreach ( $lines as $line ) {
                                    if ($i <= 0){

                                      echo '<h4 class="company-subtitle subtitle">'.strip_tags( $line ).'</h4>';
                                      $i = $i+1;
                                    }else{
                                    echo '<p>'. strip_tags( $line ) .'</p>';
                                  }
                                }
                                ?>
                            </div>
                        </div>

                        <div class="col-md-7 col-sm-12">
                            <div class="company-image">
                                <div class="img-right hover-effect">
                                    <img src="<?php echo e(asset('uploads/quemsomos/'.$quemsomos->imagem1)); ?>" alt="aempresa" />
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- QUEM SOMOS PT 2 -->
            <section class="home-ceo">
              <!-- <div class="ceo-photo" >

              </div> -->
                <div class="container">
                    <div class="row ceo">

                      <div class="col-md-6 col-sm-12" style="padding:0;">
                        <img src="<?php echo e(asset('uploads/quemsomos/'.$quemsomos->imagem2)); ?>" alt="nossospilares" style="width:100%" />
                      </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="ceo-details">
                              <h4 class="ceo-subtitle subtitle"> <?php echo app('translator')->getFromJson('pagina.secao2'); ?> </h4>
                                <h2 class="ceo-title color-title"><?php echo app('translator')->getFromJson('pagina.secao2.1'); ?></h2>
                                <p><?php echo e($quemsomos->missao); ?></p>
                                <h2 class="ceo-title color-title"><?php echo app('translator')->getFromJson('pagina.secao2.2'); ?></h2>
                                <p><?php echo e($quemsomos->visao); ?></p>
                                <h2 class="ceo-title color-title"><?php echo app('translator')->getFromJson('pagina.secao2.3'); ?></h2>
                                <p><?php echo e($quemsomos->valores); ?></p>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
<!-- CULTURAS -->
            <section class="home-services-other">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title-services-other title-2"><?php echo app('translator')->getFromJson('menu.item10'); ?></h2>
                        <h4 class="subtitle-services-other subtitle-2"><?php echo app('translator')->getFromJson('pagina.secao3.1'); ?></h4>
                        <div class="spacer-50"> </div>
                    </div>

                    <div class="row services-other">
                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="assets/images/service-icon1.png" alt="SOJA" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">SOJA</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="assets/images/service-icon2.png" alt="MILHO" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">MILHO</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="assets/images/service-icon3.png" alt="HORTIFRUTI" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">HORTIFRUTI</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>


                    </div>

                </div>
            </section>
<!-- PRODUTOS -->
            <section class="home-produtos">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="subtitle-testimonials title-2"> <?php echo app('translator')->getFromJson('pagina.produtos'); ?> </h2>
                        <div class="spacer-20"> </div>
                    </div>

                    <div class="row partners">
                        <div class="logo-slides slides owl-carousel" id="owl-produtos">
                              <?php if(count($produtos) > 0): ?>
                                <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                  <div class="partner-images">
                                      <img src="<?php echo e(asset('uploads/produtos/'.$produto->imagem)); ?>" alt="Image">
                                      <h4 class="services-title-one subtitle"><?php echo e($produto->nome); ?></h4>
                                      <p style="padding: 0px 20px 0px 20px; height:190px;"><?php echo e($produto->descricao); ?></p>
                                      <a href="<?php echo e(route('produto.item',$produto->slug)); ?>" class="btn btn-default btn-normal"><?php echo app('translator')->getFromJson('pagina.seemore'); ?></a>
                                  </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php endif; ?>



                        </div>
                    </div>
                </div>
            </section>
<!-- COTAÇÃO -->
            <!-- <section class="home-links">
                <div class="container">
                    <div class="row links">
                        <div class="col-md-2">
                            <h4 class="links-title subtitle">Quick Links</h4>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">CAREERS</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">CONTACT</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">MARKET INFO</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">TECHNOLOGY</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">LATEST NEWS</a>
                        </div>
                    </div>
                </div>
            </section> -->
<!-- COTAÇÃO -->
            <!-- <section class="home-stats">
                <div class="container">
                    <div class="row stats">
                        <div class="col-md-3 col-xs-6">
                            <img src="assets/images/globe.png" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">26</h4>
                                <p>Offices Worldwide</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <img src="assets/images/friends.png" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">10000</h4>
                                <p>Satisfied Employees</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <img src="assets/images/fire.png" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">126</h4>
                                <p>Refineries &amp; Operations</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <img src="assets/images/badge.png" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">35</h4>
                                <p>Awards &amp; Recognitions</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section> -->
<!-- DEPOIMENTOS -->
              <section class="home-testimonials" id="depoimentos">

                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title-testimonials color-title"><?php echo app('translator')->getFromJson('pagina.comapalavra'); ?></h2>
                        <h2 class="subtitle-testimonials title-2"><?php echo app('translator')->getFromJson('pagina.nossosclientes'); ?></h2>
                        <div class="spacer-50"> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>

                            <h4 class="client-name">Calvin Sims</h4>
                            <p class="designation">Marketing Head, ABC Chemicals</p>
                        </div>

                        <div class="col-md-4">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>

                            <h4 class="client-name">Bertha Gonzales</h4>
                            <p class="designation">Divisional Manager, Corpo Inc.</p>
                        </div>

                        <div class="col-md-4">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>
                            <h4 class="client-name">Brianna Hernandez</h4>
                            <p class="designation">Founder &amp; CEO, Marine Engineering</p>
                        </div>
                    </div>
                </div>

            </section>

<!--
            <section class="home-publications" id="dicasdemanejo">
                <div class="container">
                    <div class="row publications">
                        <div class="col-md-7 col-sm-6">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Petrolium Engineering</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Synergistically build professional communities vis-a-vis best-of-breed paradigms. Quickly empower world-class networks with prospective methodologies. Enthusiastically morph cross functional web-readiness via virtual niche markets. Synergistically enhance one-to-one partnerships after go forward metrics. Competently facilitate alternative networks for fully tested internal or "organic" sources. Synergistically disintermediate an expanded array of niche markets through value-added value. Dynamically communicate cost effective results after intuitive scenarios. Distinctively impact synergistic experiences. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">International Trade </a> </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Synergistically build professional communities vis-a-vis best-of-breed paradigms. Quickly empower world-class networks with prospective methodologies. Enthusiastically morph cross functional web-readiness via virtual niche markets. Synergistically enhance one-to-one partnerships after go forward metrics. Competently facilitate alternative networks for fully tested internal or "organic" sources. Synergistically disintermediate an expanded array of niche markets through value-added value. Dynamically communicate cost effective results after intuitive scenarios. Distinctively impact synergistic experiences.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Chemicals and Refining </a> </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Synergistically build professional communities vis-a-vis best-of-breed paradigms. Quickly empower world-class networks with prospective methodologies. Enthusiastically morph cross functional web-readiness via virtual niche markets. Synergistically enhance one-to-one partnerships after go forward metrics. Competently facilitate alternative networks for fully tested internal or "organic" sources. Synergistically disintermediate an expanded array of niche markets through value-added value. Dynamically communicate cost effective results after intuitive scenarios. Distinctively impact synergistic experiences.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-6">
                            <div class="plubication-downloads">
                                <h2 class="publish">Dicas de Manejo e Aplicações</h2>
                                <div class="download-file">
                                    <a href="#"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download PDF <span>1.5 MB</span> </a>
                                </div>
                                <p class="download-title">Other Downloads</p>
                                <ul class="download-list">
                                    <li><a href="#"> Annual Report </a> <span>2.4 MB</span></li>
                                    <li><a href="#"> Sustainability Report </a> <span>150 KB</span></li>
                                    <li><a href="#"> Statistical Report </a> <span>250 KB</span></li>
                                    <li><a href="#"> Energy Outlook </a> <span>1.8 MB</span></li>
                                    <li><a href="#"> Chairman’s Message </a> <span>550 KB</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


              <section class="home-news" id="noticia">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title-blog color-title"> <?php echo app('translator')->getFromJson('pagina.saibamais'); ?> </h2>
                        <h2 class="subtitle-blog title-2"> <?php echo app('translator')->getFromJson('menu.item7'); ?> </h2>
                        <div class="spacer-50"> </div>
                    </div>
                <?php if(count($noticias)>0): ?>
                      <div class="row news">
                        <?php $__currentLoopData = $noticias->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-md-4">
                              <div class="blog-img-box">
                                  <div class="blog-date"> <span class="month"><?php echo e(date('M',strtotime($noticia->datapublicacao))); ?> </span> <span class="date"><?php echo e(date('d',strtotime($noticia->datapublicacao))); ?></span> </div>
                                  <a class="hover-effect" href="<?php echo e(route('noticia.item', $noticia->slug)); ?>">
                                      <img src="<?php echo e(asset('/noticias/imagens/'.$noticia->capa)); ?>">
                                  </a>
                              </div>
                              <div class="blog-content">
                                  <h3><a href="<?php echo e(route('noticia.item', $noticia->slug)); ?>"> <?php echo e($noticia->titulo); ?> </a> </h3>
                                  <p><?php echo e($noticia->descricao); ?></p>
                              </div>
                          </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                      <?php if(count($noticias)>3): ?>
                        <div class="blog-btn text-center">
                            <a href="#" class="btn btn-primary vejamais" role="button">VER TODAS</a>
                        </div>
                      <?php endif; ?>
                <?php else: ?>
                  <p>Ops, nenhuma notícia cadastrada ainda.</p>
                <?php endif; ?>
                    </div>
            </section>

            <!--  <section class="home-partners" id="parceiros">-->
            <!--    <div class="container">-->
            <!--        <div class="section-title text-center">-->
            <!--            <h2 class="subtitle-testimonials title-2"> NOSSOS PARCEIROS </h2>-->
            <!--            <div class="spacer-20"> </div>-->
            <!--        </div>-->

            <!--        <div class="row partners">-->
            <!--            <div class="logo-slides slides owl-carousel">-->
            <!--                <div class="item">-->
            <!--                    <div class="partner-images">-->
            <!--                        <img src="assets/images/partner1.png" alt="Partner Image 1">-->
            <!--                    </div>-->
            <!--                </div>-->



            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->


        </main>
        <!-- Main Content Section -->

        <!-- Footer Section -->
<?php echo $__env->make('front.partials._bottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <!-- Page Wrapper
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Javascripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Jquery Library -->
  <?php echo $__env->make('front.partials._scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

</script>
</body>

</html>
