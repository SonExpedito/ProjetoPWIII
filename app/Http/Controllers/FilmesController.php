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

    public function favoritar(Request $req)
    {
        $filmes = Filmes::All();
        $filmes->update(
            [
                'favorito'=> $req -> Favorito,
            ]
        );


        return $this->index();
    }

    public function excluir(Request $req)
    {
        $filmes = Filmes::find($req->id);
        $filmes->delete();
        return $this->index();
    }
}
