<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Filme;
use App\Models\Serie;
use App\Models\Anime;
use App\Models\Livro;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
	$lista_filmes = Filme::all();
    return view('dashboard', ['filmes'=>$lista_filmes]);
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard1', function () {
	$lista_series = Serie::all();
    return view('dashboard1', ['series'=>$lista_series]);
})->middleware(['auth'])->name('dashboard1');

Route::get('/dashboard2', function () {
	$lista_animes = Anime::all();
    return view('dashboard2', ['animes'=>$lista_animes]);
})->middleware(['auth'])->name('dashboard2');

Route::get('/dashboard3', function () {
	$lista_livros = Livro::all();
    return view('dashboard3', ['livros'=>$lista_livros]);
})->middleware(['auth'])->name('dashboard3');

require __DIR__.'/auth.php';

Route::post('/salvar', function (Request $request) {
 
  //FILMES
	$nome = $request->post('nome');
	$ano = $request->post('ano');
	$pais = $request->post('pais');
	$genero = $request->post('genero');
	$diretor = $request->post('diretor');
	$faixa_etaria = $request->post('faixa_etaria');
	$atores = $request->post('atores');
	$sinopse = $request->post('sinopse');
	$critica = $request->post('critica');
	
    $filme = new Filme;
    $filme->nome = $nome;
    $filme->save();

    $filme = new Filme;
    $filme->ano = $ano;
    $filme->save();

    $filme = new Filme;
    $filme->pais = $pais;
    $filme->save();

    $filme = new Filme;
    $filme->genero = $genero;
    $filme->save();

    $filme = new Filme;
    $filme->diretor = $diretor;
    $filme->save();

    $filme = new Filme;
    $filme->faixa_etaria = $faixa_etaria;
    $filme->save();

    $filme = new Filme;
    $filme->atores = $atores;
    $filme->save();

    $filme = new Filme;
    $filme->sinopse = $sinopse;
    $filme->save();

    $filme = new Filme;
    $filme->critica = $critica;
    $filme->save();
   
    return redirect()->to(url('/dashboard'));

})->name('salvar');

Route::post('/salvar1', function (Request $request) {
 
  //SERIES
    $nome = $request->post('nome');
    $ano = $request->post('ano');
    $pais = $request->post('pais');
    $genero = $request->post('genero');
    $diretor = $request->post('diretor');
    $faixa_etaria = $request->post('faixa_etaria');
    $atores = $request->post('atores');
    $sinopse = $request->post('sinopse');
    $critica = $request->post('critica');
    
    $serie = new Serie;
    $serie->nome = $nome;
    $serie->save();

    $serie = new Serie;
    $serie->ano = $ano;
    $serie->save();

    $serie = new Serie;
    $serie->pais = $pais;
    $serie->save();

    $serie = new Serie;
    $serie->genero = $genero;
    $serie->save();

    $serie = new Serie;
    $serie->diretor = $diretor;
    $serie->save();

    $serie = new Serie;
    $serie->faixa_etaria = $faixa_etaria;
    $serie->save();

    $serie = new Serie;
    $serie->atores = $atores;
    $serie->save();

    $serie = new Serie;
    $serie->sinopse = $sinopse;
    $serie->save();

    $serie = new Serie;
    $serie->critica = $critica;
    $serie->save();
   
    return redirect()->to(url('/dashboard1'));

})->name('salvar1');

Route::post('/salvar2', function (Request $request) {
 
  //ANIMES
    $nome = $request->post('nome');
    $ano = $request->post('ano');
    $pais = $request->post('pais');
    $genero = $request->post('genero');
    $autor = $request->post('autor');
    $faixa_etaria = $request->post('faixa_etaria');
    $sinopse = $request->post('sinopse');
    $critica = $request->post('critica');
    
    $anime = new Anime;
    $anime->nome = $nome;
    $anime->save();

    $anime = new Anime;
    $anime->ano = $ano;
    $anime->save();

    $anime = new Anime;
    $anime->pais = $pais;
    $anime->save();

    $anime = new Anime;
    $anime->genero = $genero;
    $anime->save();

    $anime = new Anime;
    $anime->autor = $autor;
    $anime->save();

    $anime = new Anime;
    $anime->faixa_etaria = $faixa_etaria;
    $anime->save();

    $anime = new Anime;
    $anime->sinopse = $sinopse;
    $anime->save();

    $anime = new Anime;
    $anime->critica = $critica;
    $anime->save();
   
    return redirect()->to(url('/dashboard2'));

})->name('salvar2');

Route::post('/salvar3', function (Request $request) {
 
  //LIVROS
    $nome = $request->post('nome');
    $ano = $request->post('ano');
    $pais = $request->post('pais');
    $genero = $request->post('genero');
    $autor = $request->post('autor');
    $faixa_etaria = $request->post('faixa_etaria');
    $sinopse = $request->post('sinopse');
    $critica = $request->post('critica');
    
    $livro = new Livro;
    $livro->nome = $nome;
    $livro->save();

    $livro = new Livro;
    $livro->ano = $ano;
    $livro->save();

    $livro = new Livro;
    $livro->pais = $pais;
    $livro->save();

    $livro = new Livro;
    $livro->genero = $genero;
    $livro->save();

    $livro = new Livro;
    $livro->autor = $autor;
    $livro->save();

    $livro = new Livro;
    $livro->faixa_etaria = $faixa_etaria;
    $livro->save();

    $livro = new Livro;
    $livro->sinopse = $sinopse;
    $livro->save();

    $livro = new Livro;
    $livro->critica = $critica;
    $livro->save();
   
    return redirect()->to(url('/dashboard3'));

})->name('salvar3');


