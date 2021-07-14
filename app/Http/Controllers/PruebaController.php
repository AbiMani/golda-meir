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
       $file= public_path(). "/FICHA_AÑO_2022.docx";

       $headers = array(
                 'Content-Type: application/pdf',
               );

       return Response::download($file, 'FICHA_AÑO_2022.docx', $headers);
       //dd(public_path());
    }
    public function getDownloadPDF()
    {
       //PDF file is stored under project/public/download/info.pdf
       $file= public_path(). "/FICHA_AÑO_2022.pdf";

       $headers = array(
                 'Content-Type: application/pdf',
               );

       return Response::download($file, 'FICHA_AÑO_2022.pdf', $headers);
       //dd(public_path());
    }
}
