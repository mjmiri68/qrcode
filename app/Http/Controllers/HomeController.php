<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

class HomeController extends Controller
{

    public function index(){
        return view('home');
    }

    public function generator(Request $request){
        $options = new QROptions(
            [
              'eccLevel' => QRCode::ECC_L,
              'outputType' => QRCode::OUTPUT_MARKUP_SVG,
              'version' => 5,
            ]
          );
          
          $qrcode = (new QRCode($options))->render($request->qrcode);
          $data = [
            'qrcode' => $qrcode
          ];
          return view('home',$data);
    }
}
