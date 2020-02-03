<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
      $mahasiswa = DB::table('mahasiswa')->get();
      return view('home', ['mahasiswa' => $mahasiswa]);
    }

    public function formInput(){
      $pendidikan = DB::table('pendidikan')->get();
      return view('form', ['pendidikan' => $pendidikan]);
    }

    public function insert(Request $request){
      $hobby =  $request->hoby;
      
      if(!empty($hobby)){
         $hobby = substr(implode(', ', $hobby), 0);
      }else{
         $hobby = null;
      }

      DB::table('mahasiswa')->insert(
         [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pendidikan' => $request->pendidikan,
            'telepon' => $request->nohp,
            'email' => $request->email,
            'hobby' => $hobby,
         ]
      );

      return redirect('/');
    }

    public function viewDataPh(){
       return view('diagram');
    }

    public function requestPh(){
      $data = DB::table('data_ph')
         ->orderBy('timestamp', 'desc')
         ->take(7)
         ->get();
      return response()->json($data);
   }

   public function requestLastPh(){
      $data = $user = DB::table('data_ph')
         ->latest('timestamp')
         ->first();
      return response()->json($data);
   }

   public function get_diagram_ph(){
      return view('data_ph');
   }
}
