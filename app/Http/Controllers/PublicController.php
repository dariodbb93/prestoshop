<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use App\Http\Requests\Uploads;
use App\Http\Requests\UploadsRequest;
use App\Http\Requests\Uploads as RequestsUploads;



class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }


    public function __construct()

    {
        $this->middleware('auth')->except('indexAnnunci', 'welcome', 'details', 'about');
    }

    public function upload()
    {
        return view('upload');
    }

    public function storeAnnuncio(Uploads $request)
    {
        $annuncio = Upload::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price')

        ]);

        return view('caricato');
    }

    public function indexAnnunci()
    {
        $uploads = Upload::all(); //mi prendi tutti gli oggetti di classe annuncio che hai
        return view('welcome', compact('uploads'));
    }

    public function details(Upload $upload)
    {
 
        return view('details', compact('upload'));
   
    }


public function edit(Upload $upload){

    return view('.edit', compact('upload'));

}


public function update(Upload $upload, Request $request){

$upload->update([
  
   
        'title'=>$request->title,
        'description'=>$request->description,
        'price'=>$request->price

]
);


    return view('caricato');


}

public function about(){

    
        return view('about');
    
    
    }

    public function destroy(Upload $upload){
        $upload->delete();

        return redirect(route('indexAnnunci'));


    }


}
