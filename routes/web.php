<?php

use App\Http\Controllers\FilmesController;

use Illuminate\Support\Facades\Route;

Route::get("/",[FilmesController::class, "index"]); 
Route::get("/favoritar/{id}", [FilmesController::class, "favoritar"]);
Route::get("/desfavoritar/{id}", [FilmesController::class, "desfavoritar"]);

/*Route::get("/cadastrar",[ClienteController::class, "cadastro"]); 
Route::get("/listar",[ClienteController::class, "listar"]);
Route::post("/adicionarCliente", [ClienteController::class, "adicionar"]);
Route::get("/editar/{id}",[ClienteController::class,"editar"]);
Route::post("/atualizar/{id}",[ClienteController::class,"atualizar"]);
Route::get("/excluir/{id}",[ClienteController::class,"excluir"]);*/
