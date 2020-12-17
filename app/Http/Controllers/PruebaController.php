<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class PruebaController extends Controller
{
    public function index()
    {
        return view('prueba');
    }

    public function store(Request $request){
  
    	dd($request->file('file')->storeAs('public',request()->file->getClientOriginalName()));
    	return "archivo guardado";
    }

    public function getDownload()
{
       //PDF file is stored under project/public/download/info.pdf
       $file= public_path(). "/storage/FICHA AÑO 2021.docx";

       $headers = array(
                 'Content-Type: application/pdf',
               );

       return Response::download($file, 'FICHA_AÑO_2021.docx', $headers);
}
}
