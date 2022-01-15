<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class ImagesController extends Controller {

    public function index() {

        // Pega os posts a partir do mais recente

        $images = Images::orderBy('id', 'desc')->get();
        return view('images.images', ['img' => $images]);
    }

    public function show(Images $img) {
        return view('images.show', ['image' => $img]);
    }

    public function insert(Request $form) {
        $images = new Images();

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
        // Se passar nos 2, a image é salva no banco e volta pra images

        if (isset($form->description) && isset($form->title) && !empty($form->file('image'))) {
            if (in_array($form->file('image')->getClientOriginalExtension(), $extensoes)) {
                $images->title = $form->title;
                $images->description = $form->description;
                $images->url = $form->file('image')->store('', 'images');;

                $images->save();

                return redirect()->route('images');
            }
        }
        return redirect()->route('images.add');
    }
}
