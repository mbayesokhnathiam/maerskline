<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gainde.index');
    }

    /**
     * Save file to database.
     *
     * @param Request $request
     * @return Response
     */
    public function import(Request $request)
    {
        $request->validate(['gainde_file' => 'required|max:5100']);

        $file = Storage::putFile('manifiste', $request->file('gainde_file'));

        // Get file from Storage
        $fileToRead = Storage::get($file);
        $fileContent = json_decode($fileToRead, true);

        $manifest_data = $fileContent['listeManifeste'];

        // dd($manifest_data[0]['listConteneur']);

        foreach ($manifest_data as $items) {
            if (is_array($items)) {
                foreach($items as $data) {
                    echo 'Array <br>';
                    print_r($data);
                }

                echo 'String <br>';
                print_r($items);
            }

            // echo $items;
        }

        // dd($needed_data);

        // return view('gainde.index', ['content' => $needed_data]);
    }

}
