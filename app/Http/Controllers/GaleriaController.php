<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;

class GaleriaController extends Controller {

    public function index() {

        // Pega os posts a partir do mais recente

        $galeria = Galeria::orderBy('id', 'desc')->get();
        return view('galeria.galeria', ['img' => $galeria]);
    }

    public function show(Galeria $img) {
        return view('galeria.show', ['imagem' => $img]);
    }

    public function insert(Request $form) {
        $galeria = new Galeria();

        $extensoes = [
            'png',
            'jpg',
            'jpeg',
            'gif',
            'svg',
            'webp'
        ];

        // Checa se todos os campos foram preenchidos e se a extensão do arquivo é permitida
        // Se não passar em algum desses testes, volta para o formulário
        // Se passar nos 2, a imagem é salva no banco e volta pra galeria

        if (isset($form->descricao) && isset($form->titulo) && !empty($form->file('imagem'))) {
            if (in_array($form->file('imagem')->getClientOriginalExtension(), $extensoes)) {
                $galeria->titulo = $form->titulo;
                $galeria->descricao = $form->descricao;
                $galeria->url = $form->file('imagem')->store('', 'images');;

                $galeria->save();

                return redirect()->route('galeria');
            }
        }
        return redirect()->route('galeria.inserir');
    }
}
