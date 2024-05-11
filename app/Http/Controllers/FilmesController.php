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
                'favorito'=> 1,
            ]
        );


        return $this->index();
    }

    public function desfavoritar(Request $req)
    {
        $filmes = Filmes::All();
        $filmes->update(
            [
                'favorito'=> 0,
            ]
        );


        return $this->index();
    }
}
