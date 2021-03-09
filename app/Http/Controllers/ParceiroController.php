<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Parceiro;
use Illuminate\Http\Request;

use Image;
use Storage;

class ParceiroController extends Controller
{
    public function index()
    {
      $parceiro = Parceiro::all();
      return view('admin.parceiro.index', ['parceiros' => $parceiro]);
    }

    public function create()
    {
      return view('admin.parceiro.index');
    }

    public function store(Request $request)
    {
      $this->validate($request, array(
        'imagem' => 'sometimes|image|mimes:jpeg,png,jpg',
      ));

        $parceiro = new Parceiro;

        if ($request->hasFile('imagem')) {
          $image = $request->file('imagem');
          $filename = time() . '.' . $image->getClientOriginalName();
          $location = public_path('uploads/parceiro/' . $filename);
          Image::make($image)->save($location);
          $parceiro->imagem = $filename;
        }


        $parceiro->save();

        $request->session()->flash('success', 'Parceiro cadastrado com sucesso !');
        return redirect('admin/parceiros')->with('flash_message', 'Parceiro cadastrado com sucesso !');
    }

    public function edit($id)
    {
      $parceiro = Parceiro::findOrFail($id);
      return view('admin.parceiro.edit', compact('parceiro'));
    }

    public function update(Request $request, $id)
    {
      $parceiro = Parceiro::find($id);
      $parceiro->fill($request->all());

      if ($request->hasFile('imagem')) {
        $image = $request->file('imagem');
        $filename = time() . '.' . $image->getClientOriginalName();
        $location = public_path('uploads/parceiro/' . $filename);
        Image::make($image)->save($location);
        if ($parceiro->imagem) {
          $oldFilename = $parceiro->imagem;
          Storage::delete('uploads/parceiro/'.$oldFilename);
        }
        $parceiro->imagem = $filename;
      }


      $parceiro->save();

      $request->session()->flash('success', 'Parceiro modificado com sucesso.');
      return redirect('admin/parceiros')->with('flash_message', 'Parceiro alterado com sucesso !');
    }

    public function destroy($id)
    {
      $parceiro = Parceiro::find($id)->delete();
      return [response()->json("success"), redirect('admin/parceiros')];
    }
}
