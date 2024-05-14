<?php

use App\Http\Controllers\FilmesController;

use Illuminate\Support\Facades\Route;

/**Redirecionamento */
Route::get("/", [FilmesController::class, "index"]);
Route::get("/cadastrar", [FilmesController::class, "cadastrar"]);
Route::get("/editar/{id}", [FilmesController::class, "editar"]);
Route::get("/listartabela", [FilmesController::class,"listartabela"]);


/*Funções */
Route::post("/adicionar", [FilmesController::class, "adicionar"]);
Route::post("/atualizar/{id}", [FilmesController::class, "atualizar"]);
Route::get("/excluir/{id}", [FilmesController::class, "excluir"]);


Route::post("/favoritar/{id}", [FilmesController::class, "favoritar"]);
Route::post("/desfavoritar/{id}", [FilmesController::class, "desfavoritar"]);


