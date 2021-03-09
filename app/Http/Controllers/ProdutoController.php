<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;
use DB;
use Image;
use Storage;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $produtos = Produto::paginate(25);
        return view('admin.produtos.index', [
          'produtos' => $produtos
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        return view('admin.produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
          'nome'          => 'required|max:225|unique:produtos,nome,NULL, deleted_at,deleted_at,NULL',
          'imagem'        => 'image|mimes:jpeg,png,jpg',
          'logo'        => 'image|mimes:jpeg,png,jpg',
          'informacoesnutricionais'    => 'image|mimes:jpeg,png,jpg',

        ));

        $slug = Self::tirarAcentos(str_replace(" ", "-", $request->nome));

        $produto = new Produto;
        $produto->fill($request->all());
        $produto->slug          = $slug;

        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $filename = time() . '.' . $image->getClientOriginalName();
            $location = public_path('uploads/produtos/' . $filename);
            Image::make($image)->save($location);
            $produto->imagem = $filename;
        }
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalName();
            $location = public_path('uploads/produtos/' . $filename);
            Image::make($image)->save($location);
            $produto->logo = $filename;
        }

        $produto->save();
        $request->session()->flash('success', 'Produto adicionada com sucesso');
        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $produto = Produto::where('slug', '=', $id)->first();
        return view('admin.produtos.show')->with('produto', $produto);
    }

    public function tirarAcentos($string)
    {
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(Ç)/","/(ç)/"), explode(" ", "a A e E i I o O u U n N C c"), $string);
    }

    public function getSingle($slug)
    {
        $produto = Produto::where('slug', '=', $slug)->first();
        return view('admin.produtos.show')->with('produto', $produto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit(Produto $produto)
    {
        return view('admin.produtos.edit', [
         'produto' => $produto
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);

        $slug = Self::tirarAcentos(str_replace(" ", "-", $request->nome));

        $produto->fill($request->all());
        $produto->slug          = $slug;

        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $filename = time() . '.' . $image->getClientOriginalName();
            $location = public_path('uploads/produtos/' . $filename);
            Image::make($image)->save($location);

            if ($produto->imagem) {
                $oldFilename = $produto->imagem;
                Storage::delete('produtos/imagens/'.$oldFilename);
            }
            $produto->imagem = $filename;
        }
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalName();
            $location = public_path('uploads/produtos/' . $filename);
            Image::make($image)->save($location);

        

            if ($produto->logo) {
                $oldFilename = $produto->logo;
                Storage::delete('uploads/produtos/'.$oldFilename);
            }
            $produto->logo = $filename;
        }

        $produto->save();
        $request->session()->flash('success', 'Produto alterado com sucesso');
        return redirect()->route('produto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return [response()->json("success"), redirect('admin/produto')];
    }
}
