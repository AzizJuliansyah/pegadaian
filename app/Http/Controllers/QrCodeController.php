<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index()
    {
      return view('qrcode');
    }

    public function download(){
      //code download
    $imageName = 'qrcode';

    $header = array('Content-type' => ['png', 'jpg']);

    $qrcpde = QrCode::format('png')->size(200)->errorCorrection('H')->generate($item->qr_code);

    Storage::disk('public')->put($imageName, $qrcode);

    return response()->download('storage/'.$imageName, $imageName.'.png', $header)->deleteFileAfterSend();
    }
}
