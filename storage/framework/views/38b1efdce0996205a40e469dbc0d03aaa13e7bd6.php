<title>AGRAIN | <?php echo e($produtoss->nome); ?></title>
<link rel="stylesheet" href="../assets/css/produtos.css">
<!-- Basic Page Needs -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Nutrir, cultivar e colher.">
<meta name="author" content="Agência Like DSG">

<!-- Page Title -->

<!-- Favicon -->
<link rel="icon" type="image/png" href="favicon.png">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap core CSS -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="../assets/fonts/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/style.css">

<style>
  section{
    padding: 60px 0 0 0;
  }
</style>
<!-- Menu -->
<!-- Menu -->
<!-- Top Contact Info -->
<div class="row logo-top-info">
<div class="container">
    <div class="col-md-3 logo">
        <!-- Main Logo -->
        <a href="/agrain"><img src="../assets/images/logo.png" alt="Agrain Logo" /></a>
        <!-- Responsive Toggle Menu -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only"> Main Menu </span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="col-md-9 top-info-social">
        <div class="pull-right">
            <div class="top-info">
                <div class="market">
                    <h3 style="font-family:MangueiraMedium"> <?php echo app('translator')->getFromJson('menu.texto1'); ?> <p style="text-align:right; color:#3a9a30; font-size:18px; font-family:MangueiraBold"><?php echo app('translator')->getFromJson('menu.texto2'); ?></p> </h3>
                </div>
            </div>
            <div class="social">
                <ul class="social-icons">
                    <li><a href="<?php echo e(url('locale/pt-br')); ?>"><img border="0" alt="BR" src="../assets/images/brasil.png"></a></li>
                    <li><a href="<?php echo e(url('locale/en')); ?>"><img border="0" alt="EUA" src="../assets/images/eua.png"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Main Navigation Section -->
<nav id="navbar" class="collapse navbar-collapse main-menu">
<div class="container">
    <ul class="main-menu">
        <li> <a href="#sobre"><?php echo app('translator')->getFromJson('menu.item2'); ?></a>  </li>
        <?php if(!empty($produtos)): ?>
          <li class="dropdown"><a href="#" data-toggle="dropdown"><?php echo app('translator')->getFromJson('menu.item3'); ?>
              <i class="fa fa-chevron-down dropdown-toggle"> </i>  </a>
              <ul>
                <?php $count = 0; ?>
                <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php if($count == 4) break; ?>
                  <li> <a href="<?php echo e(route('produto.item',$produto->slug)); ?>" style="color:#23b953"><?php echo e($produto->nome); ?></a> </li>
                  <?php $count++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </li>
        <?php endif; ?>

          <li><a href="#depoimentos"><?php echo app('translator')->getFromJson('menu.item5'); ?></a> </li>

        <!-- <li><a href="#dicasdemanejo"><?php echo app('translator')->getFromJson('menu.item6'); ?></a> </li> -->

          <li><a href="#noticia"><?php echo app('translator')->getFromJson('menu.item7'); ?> </a></li>

          <li><a href="#parceiros"><?php echo app('translator')->getFromJson('menu.item8'); ?></a> </li>
        <li><a href="#contato"><?php echo app('translator')->getFromJson('menu.item9'); ?></a> </li>
    </ul>
</div>
</nav>

<!-- Conteúdo -->
<main class="main">
    <!-- Page Title -->
    <div class="page-title text-center">
        <h2 class="title"><?php echo e($produtoss->nome); ?></h2>
        <p class="description light container"><?php echo e($produtoss->descricao); ?></p>
    </div>
    <!-- Page Title -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <span class="parent"> <i class="fa fa-home"></i> <a href="/agrain"> Home </a> </span>
            <i class="fa fa-chevron-right"></i>
            <span class="child"> <?php echo e($produtoss->nome); ?> </span>
        </div>
    </div>
    <div class="container">

      <div class="row single-job">

        <!-- <div class="col-md-3 sidebar">

            <div class="partner-images">

                <img src="<?php echo e(asset('uploads/produtos/'.$produtoss->imagem)); ?>" alt="Image">

            </div>

        </div> -->
        <div class="col-md-12 job-info">
          <?php if(!empty($produtoss->indicacoes)): ?>
            <section class="career-single-job">
                <h2 class="job-title title-2"><?php echo app('translator')->getFromJson('pagina.descricao'); ?></h2>

                <p><?php echo $produtoss->indicacoes; ?></p>
              </section>
            <?php endif; ?>
          </div>
          <section class="produto-descricao" style="padding-top:0px">
          <div class="response">
              <div class="col-md-12">
                <span class="niveis" style="text-align:left">NÍVEIS DE GARANTIA POR KG DO PRODUTO</span>
                  <div class="table" style="float:left">
                    <div class="row">
                        <div class="col-md-6 conteudo"><strong><?php echo app('translator')->getFromJson('pagina.col1'); ?></strong></div>
                        <div class="col-md-3 conteudo"><strong><?php echo app('translator')->getFromJson('pagina.col2'); ?></strong></div>
                        <div class="col-md-3 conteudo"><strong><?php echo app('translator')->getFromJson('pagina.col3'); ?></strong></div>
                    </div>
                    <?php $__empty_1 = true; $__currentLoopData = $informacaonutricional; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <div class="row">
                          <div class="col-md-6 conteudo"><?php echo e($in->elemento); ?></div>
                          <div class="col-md-3 conteudo"><?php echo e($in->pp); ?></div>
                          <div class="col-md-3 conteudo"><?php echo e($in->pv); ?></div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <?php endif; ?>
                  </table>
              </div>
          </div>


          </div>
          </section>

          <?php if(!empty($produtoss->mododeusar)): ?>
                <section class="career-response col-md-12" >
                    <div class="response">
                        <h2 class="title-2" style="padding-bottom: 30px;"><?php echo app('translator')->getFromJson('pagina.utilizacao'); ?></h2>
                        <ul>
                          <?php
                            $lines = explode("}", $produtoss->mododeusar); // or use PHP PHP_EOL constant
                            if ( !empty($lines) )
                              foreach ( $lines as $line ) {
                                echo '<div class="col-md-3 job-info">
                                <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>'.$line.'</li></div>';

                              }
                          ?>

                        </ul>
                    </div>
                    <!-- <div class="text-center response-btn">
                        <a href="#" class="btn btn-primary" role="button">APPLY TO THIS JOB</a>
                    </div> -->

                </section>
                <?php endif; ?>


    </div>
</main>

<!-- Rodapé -->
<footer <section id="contato">

    <div class="footer">
        <div class="container">
            <!-- Prefooter Section -->
            <div class="row pre-footer">
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title"><?php echo app('translator')->getFromJson('pagina.endereco'); ?></h4>
                            <p><?php echo e($quemsomos->endereco); ?>, <?php echo e($quemsomos->bairro); ?></p>
                            <p><?php echo e($quemsomos->cidade); ?> - <?php echo e($quemsomos->estado); ?>. <?php echo e($quemsomos->cep); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title"><?php echo app('translator')->getFromJson('pagina.contato'); ?></h4>
                            <p><a href="tel:<?php echo e(preg_replace('/[^0-9]/','',$quemsomos->telefone1)); ?>" style="color: rgba(0, 0, 0, 0.8)"><?php echo e($quemsomos->telefone1); ?></a></p>
                            <p><a href="tel:<?php echo e(preg_replace('/[^0-9]/','',$quemsomos->telefone2)); ?>" style="color: rgba(0, 0, 0, 0.8)"><?php echo e($quemsomos->telefone2); ?></a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">E-MAIL</h4>
                            <p><a href="mailto:<?php echo e($quemsomos->email); ?>"style="color: rgba(0, 0, 0, 0.8)"><?php echo e($quemsomos->email); ?></a></p>
                            <p><a href="mailto:<?php echo e($quemsomos->email); ?>"style="color: rgba(0, 0, 0, 0.8)"><?php echo e($quemsomos->email); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prefooter Section -->

            <!-- Footer widgets -->
            <div class="row widgets">
                <div class="col-md-4 col-sm-6">
                    <div class="about-txt widget">
                        <img src="../assets/images/footer-logo.png" alt="logo" />
                        <?php
                        $i=0;
                        $lines = explode("\n", $quemsomos->quemsomos); // or use PHP PHP_EOL constant
                        if ( !empty($lines) )
                          foreach ( $lines as $line ) {
                            if ($i <= 0){
                              echo '<p>'. strip_tags( $line ) .'</p>';
                              $i = $i+1;
                            }else{
                          }
                        }
                        ?>

                        <div class="widgets-social">
                            <a href="<?php echo e($quemsomos->facebook); ?>"> <i class="fa fa-facebook" style="margin-top:10px" aria-hidden="true"></i> </a>
                            <a href="<?php echo e($quemsomos->instagram); ?>"> <i class="fa fa-instagram" style="margin-top:10px" aria-hidden="true"></i></a>
                            <a href="<?php echo e($quemsomos->linkedin); ?>"> <i class="fa fa-linkedin" style="margin-top:10px" aria-hidden="true"></i></a>
                            <a href="<?php echo e($quemsomos->youtube); ?>"> <i class="fa fa-youtube" style="margin-top:10px" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="spacer-50 visible-sm"></div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-services widget">
                        <h2 class="widget-title"><?php echo app('translator')->getFromJson('pagina.produtos'); ?></h2>
                        <?php if(!empty($produtos) > 0): ?>
                        <ul>
                          <?php $count = 0; ?>
                          <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($count == 4) break; ?>
                            <li> <a href="<?php echo e(route('produto.item',$produto->slug)); ?>"><?php echo e($produto->nome); ?></a> </li>
                            <?php $count++; ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="newsletter widget">
                        <h2 class="widget-title">Newsletter</h2>
                        <p><?php echo app('translator')->getFromJson('pagina.newsletter'); ?></p>
                        <!-- ============= Mailchimp Subscribe Form ============= -->

                        <form action="php/subscribe.php" id="subscribeform" method="post">
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="<?php echo app('translator')->getFromJson('pagina.news-placeholder'); ?>" class="form-control" title="<?php echo app('translator')->getFromJson('pagina.news-title'); ?>" data-msg-email="<?php echo app('translator')->getFromJson('pagina.news-msg'); ?>">
                            </div>
                            <button type="submit" class="btn btn-block" id="js-subscribe-btn"> <?php echo app('translator')->getFromJson('pagina.news-btn'); ?> </button>

                            <div id="js-subscribe-result" data-success-msg="Done. Subscribed" data-error-msg="Oops. Error!"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Footer widgets -->
        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row copyright-bar">
                <div class="col-md-6">
                    <p>Copyright © <?php echo date("Y"); ?> AGRAIN. <?php echo app('translator')->getFromJson('pagina.direitosreservados'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer Section -->

        <!-- back-to-top link -->
        <a href="#0" class="cd-top"> Top </a>

<script src="../assets/js/jquery.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script src="../assets/js/bootstrap.min.js"></script>

<!-- jQuery Flex Slider -->
<script src="../assets/js/jquery.flexslider-min.js"></script>

<!-- Owl Carousel -->
<script src="../assets/js/owl.carousel.min.js"></script>

<!-- Counter JS -->
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/jquery.counterup.min.js"></script>

<!-- Back to top -->
<script src="../assets/js/back-to-top.js"></script>

<!-- Form Validation -->
<script src="../assets/js/validate.js"></script>

<!-- Subscribe Form JS -->
<script src="../assets/js/subscribe.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>
<script src="../assets/js/pages.js"></script>
