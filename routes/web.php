<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SobreController;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('servico', [ServicoController::class, 'index'])->name('servico');
Route::get('servicos/comercial', [ServicoController::class, 'comercial'])->name('servicos.comercial');
Route::get('servicos/construcao', [ServicoController::class, 'construcao'])->name('servicos.construcao');
Route::get('servicos/gerenciamento', [ServicoController::class, 'gerenciamento'])->name('servicos.gerenciamento');
Route::get('servicos/manutencao', [ServicoController::class, 'manutencao'])->name('servicos.manutencao');
Route::get('servicos/reforma', [ServicoController::class, 'reforma'])->name('servicos.reforma');
Route::get('servicos/residencial',[ServicoController::class, 'residencial'])->name('servicos.residencial');

Route::get('sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('portfolio', [PortfolioController::class,'index'])->name('potfolio');
Route::get('contato', [ContatoController::class, 'index'])->name('contato');
