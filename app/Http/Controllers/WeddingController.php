<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index()
    {
        return view('wedding');
    }

    public function postUcapan(Request $request) 
    {
        $ucaparaArray = [
            '_id' => (string) new \MongoDB\BSON\ObjectId(),
            'nama' => $request->nama,
            'ucapan' => $request->ucapan,
            'datetime' => time()
        ];
        
        $ucapan = Ucapan::create($ucaparaArray);
        $ucapan->save();

        $allUcapan = Ucapan::all()->toArray();
        echo json_encode($allUcapan);
    }
}
