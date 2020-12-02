<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\User;

class PdfController extends Controller
{

  public function print()
  {
    $data = User::all();
    $pdf = PDF::loadview('pdf',['data'=>$data])->setPaper('A4','potrait');
    $path = public_path('pdf/');
    $fileName =  'laporn.pdf' ;
    $pdf->save($path . '/' . $fileName);
    return response()->json([
        'message' => 'Successfully',
        'url' => $path.$fileName
    ]);
  }
}
