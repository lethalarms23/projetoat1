<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public $listasites = [
        'https://www.aedah.pt',
        'https://sites.google.com/view/lethalarms',
        'https://sites.google.com/view/lethalmods',
        'https://google.com',
    ];

    public function mostraSite(){
        $a = count($this->listasites);
        return view('sites', ['siteslista' => $this->listasites, 'numerosites' => $a]);
    }

    public function processaForm(Request $request){
        $nome = $request -> nome;
        $morada = $request -> morada;
        $carro = $request -> automovel;
        return view('formprocessado',['nome'=>$nome,'morada'=>$morada,'automovel'=>$carro]);
    }
}
