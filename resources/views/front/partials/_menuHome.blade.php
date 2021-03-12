<!-- Menu -->
<!-- Top Contact Info -->
<div class="row logo-top-info">
    <div class="container">
        <div class="col-md-3 logo">
            <!-- Main Logo -->
            <a href="/"><img src="assets/images/logo.png" alt="Agrain Logo" /></a>
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
                        <li><a href="{{ url('locale/pt-br') }}"><img border="0" alt="BR" src="assets/images/brasil.png"></a></li>
                        <li><a href="{{ url('locale/en') }}"><img border="0" alt="EUA" src="assets/images/eua.png"></a></li>
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
                     <?php if($count == 9) break; ?>
                      <li> <a href="{{route('produto.item',$produto->slug)}}" style="color:#23b953">{{$produto->nome}}</a> </li>
                      <?php $count++; ?>
                    @endforeach
                  </ul>
              </li>
            @endif

            <!-- <li><a href="#depoimentos">@lang('menu.item3')</a> </li> -->
            <li><a href="#culturas">@lang('menu.item10')</a> </li>
            <!--<li><a href="#depoimentos">@lang('menu.item5')</a> </li>-->

            <!-- <li><a href="#dicasdemanejo">@lang('menu.item6')</a> </li> -->

              <li><a href="#noticia">@lang('menu.item7') </a></li>

              <!--<li><a href="#parceiros">@lang('menu.item8')</a> </li>-->
            <li><a href="#contato">@lang('menu.item9')</a> </li>
        </ul>
    </div>
</nav>
