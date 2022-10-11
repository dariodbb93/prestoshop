<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use App\Http\Requests\Uploads;
use App\Http\Requests\UploadsRequest;
use App\Http\Requests\Uploads as RequestsUploads;




class PublicController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function upload() {
        return view('upload');
    }

    public function storeAnnuncio(Uploads $request){
        $annuncio = Upload::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
        ]);

        return view('caricato');
}

public function indexAnnunci(){
    $uploads = Upload::all(); //mi prendi tutti gli oggetti di classe annuncio che hai
    return view('welcome', compact('uploads'));


}









}


