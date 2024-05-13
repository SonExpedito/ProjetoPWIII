<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filmes;

class FilmesController extends Controller
{
    //
    public function index()
    {
        $filmes = Filmes::All();
        return view('home')->with("filmes", $filmes);
    }

    public function favoritar($id)
    {
        $filme = Filmes::findOrFail($id); // Encontra o filme com o ID fornecido
        $filme->update(['favorito' => 1]); // Atualiza o campo 'favorito' para 1

        return redirect()->back();
    }

    public function desfavoritar($id)
    {
        $filme = Filmes::findOrFail($id); // Encontra o filme com o ID fornecido
        $filme->update(['favorito' => 0]); // Atualiza o campo 'favorito' para 0

        return redirect()->back();
    }
}
