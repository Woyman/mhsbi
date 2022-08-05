<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index(Request $request)
    {
        $to = $request->get('to') ?? null;
        return view('wedding', ['to' =>  ucwords($to)]);
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
        echo json_encode(['status' => 'success', 'code' => 200]);
    }

    public function getUcapan() {
        $allUcapan = Ucapan::all()->toArray();
        foreach($allUcapan as &$ucapan) {
            $ucapan['datetime'] = date('d M Y', $ucapan['datetime']);
        }
        echo json_encode($allUcapan);
    }
}
