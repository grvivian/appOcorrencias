<?php

namespace App\Http\Controllers;

use App\Models\Ocorrencia;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class OcorrenciaController extends Controller
{
    public function index()
    {
        $ocorrencias = Ocorrencia::all();
        return view('ocorrencias.index', compact('ocorrencias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|max:200',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $ocorrencia = new Ocorrencia();
        $ocorrencia->descricao = $request->descricao;
        //$ocorrencia->foto = $this->salvarFoto($request->foto);
        $ocorrencia->save();

        return redirect()->route('ocorrencias.index');
    }

    private function salvarFoto($foto)
    {
        $nomeArquivo = time() . '.' . $foto->getClientOriginalExtension();
        $caminho = 'public/ocorrencias';
        //$foto = Image::make($foto);//->resize(800, 600);
        $foto->save($caminho . '/' . $nomeArquivo);
        return $nomeArquivo;
    }
}
