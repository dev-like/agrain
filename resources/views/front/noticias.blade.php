<title>AGRAIN | {{$noticia->titulo}}</title>
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
                    <h3 style="font-family:MangueiraMedium"> @lang('menu.texto1') <p style="text-align:right; color:#3a9a30; font-size:18px; font-family:MangueiraBold">@lang('menu.texto2')</p> </h3>
                </div>
            </div>
            <div class="social">
                <ul class="social-icons">
                    <li><a href="{{ url('locale/pt-br') }}"><img border="0" alt="BR" src="../assets/images/brasil.png"></a></li>
                    <li><a href="{{ url('locale/en') }}"><img border="0" alt="EUA" src="../assets/images/eua.png"></a></li>
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
        <li> <a href="#sobre">@lang('menu.item2')</a>  </li>
        @if(!empty($produtos))
          <li class="dropdown"><a href="#" data-toggle="dropdown">@lang('menu.item3')
              <i class="fa fa-chevron-down dropdown-toggle"> </i>  </a>
              <ul>
                <?php $count = 0; ?>
                @foreach($produtos as $produto)
                 <?php if($count == 4) break; ?>
                  <li> <a href="{{route('produto.item',$produto->slug)}}" style="color:#23b953">{{$produto->nome}}</a> </li>
                  <?php $count++; ?>
                @endforeach
              </ul>
          </li>
        @endif

          <li><a href="#depoimentos">@lang('menu.item5')</a> </li>

        <!-- <li><a href="#dicasdemanejo">@lang('menu.item6')</a> </li> -->

          <li><a href="#noticia">@lang('menu.item7') </a></li>

          <li><a href="#parceiros">@lang('menu.item8')</a> </li>
        <li><a href="#contato">@lang('menu.item9')</a> </li>
    </ul>
</div>
</nav>

<!-- Conteúdo -->
<main>
    <!-- Cabeçalho -->
    <header class="noticia">
        <!-- Banners -->
        <div class="banner" style="background-image: url({{ asset('noticias/imagens/'. $noticia->capa) }})">
            <div class="container">
                <h1>
                    <div class="container">
                      {{$noticia->titulo}}
                     </div>
                </h1>
            </div>
        </div>
    </header>
    <!-- Conteúdo -->
    <section class="bg-tp1 noticia-descricao" style="padding: 60px 0 100px 0px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <time datetime="{{ date('d/m/y g:ia', strtotime($noticia->datapublicacao)) }}">{{ date('d/m/y g:ia', strtotime($noticia->datapublicacao)) }}</time>
                    <p>{!!$noticia->conteudo!!}</p>
                </div>
            </div>
        </div>
    </section>
  </main>


    <!-- Rodapé -->

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
                            <h4 class="pre-footer-title">@lang('pagina.endereco')</h4>
                            <p>{{$quemsomos->endereco}}, {{$quemsomos->bairro}}</p>
                            <p>{{$quemsomos->cidade}} - {{$quemsomos->estado}}. {{$quemsomos->cep}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">@lang('pagina.contato')</h4>
                            <p><a href="tel:{{preg_replace('/[^0-9]/','',$quemsomos->telefone1)}}" style="color: rgba(0, 0, 0, 0.8)">{{$quemsomos->telefone1}}</a></p>
                            <p><a href="tel:{{preg_replace('/[^0-9]/','',$quemsomos->telefone2)}}" style="color: rgba(0, 0, 0, 0.8)">{{$quemsomos->telefone2}}</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">E-MAIL</h4>
                            <p><a href="mailto:{{$quemsomos->email}}"style="color: rgba(0, 0, 0, 0.8)">{{$quemsomos->email}}</a></p>
                            <p><a href="mailto:{{$quemsomos->email}}"style="color: rgba(0, 0, 0, 0.8)">{{$quemsomos->email}}</a></p>
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

</body>
