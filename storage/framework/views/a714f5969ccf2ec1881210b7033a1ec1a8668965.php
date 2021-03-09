<footer <section id="contato">

    <div class="footer">
        <div class="container">
            <!-- Prefooter Section -->
            <!--<div class="row pre-footer">-->
            <!--    <div class="col-md-4">-->
            <!--        <div class="contact-box">-->
            <!--            <i class="fa fa-map-marker" aria-hidden="true"></i>-->
            <!--            <div class="contact-details">-->
            <!--                <h4 class="pre-footer-title"><?php echo app('translator')->getFromJson('pagina.endereco'); ?></h4>-->
            <!--                <p><?php echo e($quemsomos->endereco); ?>, <?php echo e($quemsomos->bairro); ?></p>-->
            <!--                <p><?php echo e($quemsomos->cidade); ?> - <?php echo e($quemsomos->estado); ?>. <?php echo e($quemsomos->cep); ?></p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--    <div class="col-md-4">-->
            <!--        <div class="contact-box">-->
            <!--            <i class="fa fa-phone" aria-hidden="true"></i>-->
            <!--            <div class="contact-details">-->
            <!--                <h4 class="pre-footer-title"><?php echo app('translator')->getFromJson('pagina.contato'); ?></h4>-->
            <!--                <p><a href="tel:<?php echo e(preg_replace('/[^0-9]/','',$quemsomos->telefone1)); ?>" style="color: rgba(0, 0, 0, 0.8)"><?php echo e($quemsomos->telefone1); ?></a></p>-->
            <!--                <p><a href="tel:<?php echo e(preg_replace('/[^0-9]/','',$quemsomos->telefone2)); ?>" style="color: rgba(0, 0, 0, 0.8)"><?php echo e($quemsomos->telefone2); ?></a></p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--    <div class="col-md-4">-->
            <!--        <div class="contact-box">-->
            <!--            <i class="fa fa-envelope" aria-hidden="true"></i>-->
            <!--            <div class="contact-details">-->
            <!--                <h4 class="pre-footer-title">E-MAIL</h4>-->
            <!--                <p><a href="mailto:<?php echo e($quemsomos->email); ?>"style="color: rgba(0, 0, 0, 0.8)"><?php echo e($quemsomos->email); ?></a></p>-->
            <!--                <p><a href="mailto:<?php echo e($quemsomos->email); ?>"style="color: rgba(0, 0, 0, 0.8)"><?php echo e($quemsomos->email); ?></a></p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            
            <div class="row pre-footer">
                <div class="col-md-6">
                    <div class="contact-box">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title"><?php echo app('translator')->getFromJson('pagina.endereco'); ?></h4>
                            <p><?php echo e($quemsomos->endereco); ?>, <?php echo e($quemsomos->bairro); ?></p>
                            <p><?php echo e($quemsomos->cidade); ?> - <?php echo e($quemsomos->estado); ?>. <?php echo e($quemsomos->cep); ?></p>
                        </div>
                    </div>
                </div>

            

                <div class="col-md-6">
                    <div class="contact-box">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">E-MAIL</h4>
                            <p style="padding-bottom: 24px"><a href="mailto:<?php echo e($quemsomos->email); ?>"style="color: rgba(0, 0, 0, 0.8)"><?php echo e($quemsomos->email); ?></a></p>
                          
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Prefooter Section -->

            <!-- Footer widgets -->
            <div class="row widgets">
                <div class="col-md-4 col-sm-6">
                    <div class="about-txt widget">
                        <img src="assets/images/footer-logo.png" alt="logo" />
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
