<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Quemsomos;
use App\Models\Informacaonutricional;
use App\Models\Produto;
use App\Models\Banner;
use App\Models\Depoimento;
use App\Models\Parceiro;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use DB;

class WebSiteController extends Controller
{
    public function pagenotfound()
    {
        $quemsomos = Quemsomos::find(1);
        return view('errors.404', ['quemsomos' => $quemsomos]);
        return view('admin.index');
    }

    public function home()
    {
        $noticias = Noticia::all();
        if (app()->getLocale() == 'en') {
          $quemsomos = Quemsomos::find(2);

        }else{
          $quemsomos = Quemsomos::find(1);

        }
        $banners = DB::table('banner')->where('deleted_at','=', NULL)->where('idioma','=',app()->getLocale())->orderBy('ordem','ASC')->get();
        $produtos = DB::table('produtos')->where('deleted_at','=', NULL)->orderBy('posicao','ASC')->get();
        $depoimentos = Depoimento::all();
        $parceiros = Parceiro::all();
        // dd($produtos);
        return view('front.index', [
          'quemsomos'=>$quemsomos,
          'noticias'=>$noticias,
          'banners'=>$banners,
          'produtos'=>$produtos,
          'depoimentos'=>$depoimentos,
          'parceiros'=>$parceiros]);
    }

    public function noticias()
    {
        $noticia = Noticia::all();
        if (app()->getLocale() == 'en') {
          $quemsomos = Quemsomos::find(2);

        }else{
          $quemsomos = Quemsomos::find(1);

        }
        return view('front.noticias', [
        'noticia' => $noticia,
        'quemsomos' => $quemsomos,
      ]);
    }
    public function getSingleNoticia($slug)
    {
        $noticia = Noticia::where('slug', '=', $slug)->first();

        if (app()->getLocale() == 'en') {
          $quemsomos = Quemsomos::find(2);

        }else{
          $quemsomos = Quemsomos::find(1);

        }


        return view('front.noticias', [
          'noticia' => $noticia,
          'quemsomos' => $quemsomos,
        ]);

    }
    public function produtos()
    {
        $quemsomos = Quemsomos::find(1);
        // $linha = Linha::all();
        $produtos = Produto::all();
        $informacaonutricionais  = informacaonutricional::where('produtos_id', '=', $produtos->id);

        return view('front.produtos', [
        'produtos' =>  $produtos,
        'quemsomos' => $quemsomos,
        'informacaonutricional' => $informacaonutricionais,
      ]);
    }
    public function getSingleProduto($slug)
    {
        $produtoss = Produto::where('slug', '=', $slug)->first();
        $produtos = Produto::all();
        $quemsomos = Quemsomos::find(1);
        $informacaonutricionais  = informacaonutricional::where('produtos_id', '=', $produtoss->id)->get();


        return view('front.produtos', [
          'quemsomos' => $quemsomos,
          'produtos' =>  $produtos,
          'produtoss' =>  $produtoss,
          'informacaonutricional' => $informacaonutricionais,
        ]);
    }
}
