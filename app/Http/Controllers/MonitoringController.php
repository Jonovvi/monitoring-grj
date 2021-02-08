<?php

namespace App\Http\Controllers;
use App\Kursi;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index(Request $req)
    {
      $x=$req->get('x');
      $start = $req->get('x');
      $kursiku = Kursi::where('id',7)->first();
      return view('monitoring', compact('kursiku','x','start'));
    }


    public function data(Request $req)
    {
      // $x=$_GET['x'];
      $x=$req->get('x');


      $yap = Kursi::create([
        'data' =>$y,
        'waktu' => 1,
        'tanggal' => 1,
        'jam' => 1
      ]);
      return response()->json($yap);
    }


    public function kurkur(Request $req)
    {
      $x=$_GET['x'];

      $yap = Kursi::updateOrCreate([
        'data' => $x,
        'waktu' => 1,
        'tanggal' => 2,
        'jam' => 3
      ]);

      return $yap;

    }


    public function kursi(Request $req)
    {


      date_default_timezone_set('Asia/Jakarta');
      $tanggal   = mktime(date("d"),date("m"),date("Y"));
      $tanggals  = date("d-m-Y", $tanggal);
      $jam=date("H:i:s");

      $tes = Kursi::where('tanggal', $tanggals)->first();

      if ($tes == null) {
        // code...
        $yap = Kursi::updateOrCreate([
          'data' => 1,
          'waktu' => $jam,
          'tanggal' => $tanggals,
          'jam' => $jam
        ]);

        return response()->json($yap);

      }else{
        // return $tes;
        // return response()->json();
        // hmmmmmmmm
      }

    }
}