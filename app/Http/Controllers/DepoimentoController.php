<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Depoimento;
use Illuminate\Http\Request;
use Image;
use Storage;

class DepoimentoController extends Controller
{
    public function index()
    {
      $depoimento = Depoimento::all();
      return view('admin.depoimento.index', ['depoimentos' => $depoimento]);
    }

    public function create()
    {
      return view('admin.depoimento.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
        'nome' => 'required|max:100',
        'texto'   => 'required|max:500',
        'descricao'   => 'required|max:150',
        'imagem' => 'sometimes|image|mimes:jpeg,png,jpg',
      ));

        $depoimento = new Depoimento;
        $depoimento->nome  = $request->nome;
        $depoimento->texto       = $request->texto;
        $depoimento->descricao       = $request->descricao;

        if ($request->hasFile('imagem')) {
          $image = $request->file('imagem');
          $filename = time() . '.' . $image->getClientOriginalName();
          $location = public_path('imagens/' . $filename);
          Image::make($image)->save($location);
          $depoimento->imagem = $filename;
        }

        $depoimento->save();

        $request->session()->flash('success', 'Depoimento cadastrado com sucesso !');
        return redirect('admin/depoimentos')->with('flash_message', 'Depoimento cadastrado com sucesso !');
    }

    public function edit($id)
    {
      $depoimento = Depoimento::findOrFail($id);
      return view('admin.depoimento.edit', compact('depoimento'));
    }

    public function update(Request $request, $id)
    {
      $depoimento = Depoimento::find($id);
      $depoimento->fill($request->all());

      if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $filename = time() . '.' . $image->getClientOriginalName();
            $location = public_path('imagens/' . $filename);
            Image::make($image)->save($location);

            if ($depoimento->imagem) {
                $oldFilename = $depoimento->imagem;
                Storage::delete('imagens/'.$oldFilename);
            }
            $depoimento->imagem = $filename;
        }
        $depoimento->save();

      $request->session()->flash('success', 'Depoimento modificado com sucesso.');
      return redirect('admin/depoimentos')->with('flash_message', 'Depoimento alterado com sucesso !');
    }

    public function destroy($id)
    {
      $depoimento = Depoimento::find($id)->delete();
      return [response()->json("success"), redirect('admin/depoimentos')];
    }
}
