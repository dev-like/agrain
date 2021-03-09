<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

  <title> @lang('pagina.slogan') </title>

    <!-- Flex Slider -->
    <link rel="stylesheet" href="assets/css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.min.css">
    @include('front.partials._menu')

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

                @include('front.partials._menuHome')
            </div>
        </header>
      <main class="main" style="padding-bottom:0px!important">
<!-- Seção do Banner -->
          @if(count($banners) > 0)
            <section class="home-slider">
                <div class="flexslider">
                    <ul class="slides">
                        @foreach($banners as $banner)
                        <li class="has-overlay">
                            <img src="uploads/banners/{{$banner->caminho}}" alt="Slider 1" />
                            <div class="slider-content">
                                <div class="container">
                                    <h2>{{$banner->texto}}</h2>
                                    @if($banner->link!='')
                                      <a href="{{$banner->link}}" class="btn primary-btn"> {{$banner->textobotao}} <i class="fa fa-angle-right"></i> </a>
                                    @endif
                              </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </section>
          @endif
<!-- QUEM SOMOS PT 1 -->
            <section class="home-company" id="sobre">
                <div class="container">
                    <div class="row company">
                        <div class="col-md-5 col-sm-12">
                            <div class="company-details">
                                <h2 class="company-title color-title">@lang('pagina.secao1')</h2>
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
                                    <img src="{{ asset('uploads/quemsomos/'.$quemsomos->imagem1) }}" alt="aempresa" />
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
                        <img src="{{ asset('uploads/quemsomos/'.$quemsomos->imagem2) }}" alt="nossospilares" style="width:100%" />
                      </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="ceo-details">
                              <h4 class="ceo-subtitle subtitle"> @lang('pagina.secao2') </h4>
                                <h2 class="ceo-title color-title">@lang('pagina.secao2.1')</h2>
                                <p>{{$quemsomos->missao}}</p>
                                <h2 class="ceo-title color-title">@lang('pagina.secao2.2')</h2>
                                <p>{{$quemsomos->visao}}</p>
                                <h2 class="ceo-title color-title">@lang('pagina.secao2.3')</h2>
                                <p>{{$quemsomos->valores}}</p>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
<!-- CULTURAS -->
            <section class="home-services-other" id="culturas">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title-services-other title-2">@lang('menu.item10')</h2>
                        <h4 class="subtitle-services-other subtitle-2">@lang('pagina.secao3.1')</h4>
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
            <section class="home-produtos" style="padding: 80px 0 0 0">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="subtitle-testimonials title-2"> @lang('pagina.produtos') </h2>
                        <div class="spacer-20"> </div>
                    </div>

                    <div class="row partners">
                        <div class="logo-slides slides owl-carousel" id="owl-produtos">
                              @if(count($produtos) > 0)
                                @foreach($produtos as $produto)
                                  <div class="item">
                                    <a href="{{route('produto.item',$produto->slug)}}">
                                  <div class="partner-images">
                                      <img src="{{ asset('uploads/produtos/'.$produto->imagem) }}" alt="Image">
                                      <h4 class="services-title-one subtitle">{{$produto->nome}}</h4>
                                      <p style="padding: 0px 20px 0px 20px; height:190px;">{{$produto->descricao}}</p>
                                      <div class="btn btn-default btn-normal">@lang('pagina.seemore')</div></a>
                                  </div>
                                </div>
                                @endforeach
                              @endif



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
              <!-- <section class="home-testimonials" id="depoimentos">

                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title-testimonials color-title">@lang('pagina.comapalavra')</h2>
                        <h2 class="subtitle-testimonials title-2">@lang('pagina.nossosclientes')</h2>
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

            </section> -->

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


              <section class="home-news" id="noticia" style="padding:40px 0 80px 0!important">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title-blog color-title"> @lang('pagina.saibamais') </h2>
                        <h2 class="subtitle-blog title-2"> @lang('menu.item7') </h2>
                        <div class="spacer-50"> </div>
                    </div>
                @if(count($noticias)>0)
                      <div class="row news">
                        @foreach($noticias->take(3) as $noticia)
                          <div class="col-md-4">
                              <div class="blog-img-box">
                                  <div class="blog-date"> <span class="month">{{date('M',strtotime($noticia->datapublicacao))}} </span> <span class="date">{{date('d',strtotime($noticia->datapublicacao))}}</span> </div>
                                  <a class="hover-effect" href="{{ route('noticia.item', $noticia->slug)}}">
                                      <img src="{{ asset('/noticias/imagens/'.$noticia->capa)}}">
                                  </a>
                              </div>
                              <div class="blog-content">
                                  <h3><a href="{{ route('noticia.item', $noticia->slug)}}"> {{$noticia->titulo}} </a> </h3>
                                  <p>{{$noticia->descricao}}</p>
                              </div>
                          </div>
                        @endforeach
                      </div>
                      @if(count($noticias)>3)
                        <div class="blog-btn text-center">
                            <a href="#" class="btn btn-primary vejamais" role="button">VER TODAS</a>
                        </div>
                      @endif
                @else
                  <p>Ops, nenhuma notícia cadastrada ainda.</p>
                @endif
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
@include('front.partials._bottom')
<footer <section id="contato">

    <div class="footer">
        <div class="container">
            <!-- Prefooter Section -->
            <!--<div class="row pre-footer">-->
            <!--    <div class="col-md-4">-->
            <!--        <div class="contact-box">-->
            <!--            <i class="fa fa-map-marker" aria-hidden="true"></i>-->
            <!--            <div class="contact-details">-->
            <!--                <h4 class="pre-footer-title">@lang('pagina.endereco')</h4>-->
            <!--                <p>{{$quemsomos->endereco}}, {{$quemsomos->bairro}}</p>-->
            <!--                <p>{{$quemsomos->cidade}} - {{$quemsomos->estado}}. {{$quemsomos->cep}}</p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--    <div class="col-md-4">-->
            <!--        <div class="contact-box">-->
            <!--            <i class="fa fa-phone" aria-hidden="true"></i>-->
            <!--            <div class="contact-details">-->
            <!--                <h4 class="pre-footer-title">@lang('pagina.contato')</h4>-->
            <!--                <p><a href="tel:{{preg_replace('/[^0-9]/','',$quemsomos->telefone1)}}" style="color: rgba(0, 0, 0, 0.8)">{{$quemsomos->telefone1}}</a></p>-->
            <!--                <p><a href="tel:{{preg_replace('/[^0-9]/','',$quemsomos->telefone2)}}" style="color: rgba(0, 0, 0, 0.8)">{{$quemsomos->telefone2}}</a></p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--    <div class="col-md-4">-->
            <!--        <div class="contact-box">-->
            <!--            <i class="fa fa-envelope" aria-hidden="true"></i>-->
            <!--            <div class="contact-details">-->
            <!--                <h4 class="pre-footer-title">E-MAIL</h4>-->
            <!--                <p><a href="mailto:{{$quemsomos->email}}"style="color: rgba(0, 0, 0, 0.8)">{{$quemsomos->email}}</a></p>-->
            <!--                <p><a href="mailto:{{$quemsomos->email}}"style="color: rgba(0, 0, 0, 0.8)">{{$quemsomos->email}}</a></p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <div class="row pre-footer">
                <div class="col-md-6">
                    <div class="contact-box">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">@lang('pagina.endereco')</h4>
                            <p>{{$quemsomos->endereco}}, {{$quemsomos->bairro}}</p>
                            <p>{{$quemsomos->cidade}} - {{$quemsomos->estado}}. {{$quemsomos->cep}}</p>
                        </div>
                    </div>
                </div>



                <div class="col-md-6">
                    <div class="contact-box">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">E-MAIL</h4>
                            <p style="padding-bottom: 24px"><a href="mailto:{{$quemsomos->email}}"style="color: rgba(0, 0, 0, 0.8)">{{$quemsomos->email}}</a></p>

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
                            <a href="{{$quemsomos->facebook}}"> <i class="fa fa-facebook" style="margin-top:10px" aria-hidden="true"></i> </a>
                            <a href="{{$quemsomos->instagram}}"> <i class="fa fa-instagram" style="margin-top:10px" aria-hidden="true"></i></a>
                            <a href="{{$quemsomos->linkedin}}"> <i class="fa fa-linkedin" style="margin-top:10px" aria-hidden="true"></i></a>
                            <a href="{{$quemsomos->youtube}}"> <i class="fa fa-youtube" style="margin-top:10px" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="spacer-50 visible-sm"></div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-services widget">
                        <h2 class="widget-title">@lang('pagina.produtos')</h2>
                        @if(!empty($produtos) > 0)
                        <ul>
                          <?php $count = 0; ?>
                          @foreach($produtos as $produto)
                           <?php if($count == 4) break; ?>
                            <li> <a href="{{route('produto.item',$produto->slug)}}">{{$produto->nome}}</a> </li>
                            <?php $count++; ?>
                          @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="newsletter widget">
                        <h2 class="widget-title">Newsletter</h2>
                        <p>@lang('pagina.newsletter')</p>
                        <!-- ============= Mailchimp Subscribe Form ============= -->

                        <form action="php/subscribe.php" id="subscribeform" method="post">
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="@lang('pagina.news-placeholder')" class="form-control" title="@lang('pagina.news-title')" data-msg-email="@lang('pagina.news-msg')">
                            </div>
                            <button type="submit" class="btn btn-block" id="js-subscribe-btn"> @lang('pagina.news-btn') </button>

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
                    <p>Copyright © <?php echo date("Y"); ?> AGRAIN. @lang('pagina.direitosreservados')</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer Section -->

        <!-- back-to-top link -->
        <a href="#0" class="cd-top"> Top </a>

    </div>

    <!-- Page Wrapper
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Javascripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Jquery Library -->
  @include('front.partials._scripts')
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
