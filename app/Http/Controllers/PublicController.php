<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnuncioRequest;
use App\Models\Annuncio;
use Illuminate\Http\Request;



class PublicController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function upload() {
        return view('upload');
    }

    public function storeAnnuncio(AnnuncioRequest $request){
        // $annuncio = new Annuncio();
        // $annuncio->title = $request->input('title');
        // $annuncio->title = $request->input('description');
        $annuncio = Annuncio::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'img'=>$request->file('img')->store('public/img'),
        ]);

        return view('caricato');
}

public function indexAnnunci(){
    $annuncios = Annuncio::all(); //mi prendi tutti gli oggetti di classe annuncio che hai
    return view('welcome', compact('annuncios'));


}









}


