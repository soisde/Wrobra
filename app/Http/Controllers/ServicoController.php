<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index(){
        return view('site.servico');
    }

    public function comercial(){
        return view('site.servicos.comercial');
    }

    public function construcao(){
        return view('site.servicos.construcao');
    }

    public function gerenciamento(){
        return view('site.servicos.gerenciamento');
    }

    public function manutencao(){
        return view('site.servicos.manutencao');
    }

    public function reforma(){
        return view('site.servicos.reforma');
    }

    public function residencial(){
        return view('site.servicos.residencial');
    }

}
