<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use App\Http\Requests\Uploads;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UploadsRequest;
use App\Http\Requests\Uploads as RequestsUploads;
use PhpParser\Node\Stmt\While_;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }


    public function __construct()

    {
        $this->middleware('auth')->except('indexAnnunci', 'welcome', 'details', 'about', 'destroy', 'search');
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

        return redirect(route('indexAnnunci'));
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


    public function edit(Upload $upload)
    {

        return view('.edit', compact('upload'));
    }


    public function update(Upload $upload, Request $request)
    {

        $upload->update(
            [


                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price

            ]
        );


        return redirect(route('indexAnnunci'));
    }

    public function about()
    {


        return view('about');
    }

    public function destroy(Upload $upload)
    {
        $upload->delete();

        return redirect(route('indexAnnunci'));
    }



    public function search(Request $request)
    {
        $query = $request->input('query');
        $object = Upload::all();
        $object = json_encode($object);
        $object = (json_decode($object, true));
        $arrayVuoto = array();
        $num_array = 0;
        $count = 0;
        foreach ($object as $valore) {
            if (is_array($valore)) {
                $num_array++;
            }
        }
        for ($i = 0; $i < $num_array; $i++) {

            array_push($arrayVuoto, $object[$i]['title']);
        }

        $stringa = implode(", ", $arrayVuoto);
        $collection = explode(",", $stringa);


        $parole_filtrate = preg_grep('/[' . $query . ']{3}/i', $collection);
        if (!empty($collection)) {
            return view("search", compact('parole_filtrate'));
        } else {
            echo "Nessuna parola contiene almeno 3 lettere cercate consecutive.";
        }



        // return view("search", compact('arrayFiltrato'));


    }
}
