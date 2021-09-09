<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Jadwal;
use App\Models\Jadwal_line;

class Jadwal_controller extends Controller
{
    public function index(){
    	$title = 'Manage Jadwal';
    	$dt = Jadwal::first();
    	$awal = date('Y-m-d',strtotime($dt->awal));
    	$akhir = date('Y-m-d',strtotime($dt->akhir));

    	return view('dashboard.jadwal.index',compact('title','awal','akhir'));
    }

    public function store(Request $request){
    	try {
    		\DB::table('jadwal')->delete();

    		$awal = $request->awal;
    		$akhir = $request->akhir;

    		$tanggal1 = date('Y-m-d',strtotime($request->awal));
		    $tanggal2 = date('Y-m-d',strtotime($request->akhir));

		    $jadwal = Jadwal::insertGetId([
		    	'awal'=>$awal,
		    	'akhir'=>$akhir
		    ]);
		 	
		 	$data = [];
		    while ($tanggal1 <= $tanggal2) {
		    	Jadwal_line::insert([
		    		'jadwal'=>$jadwal,
		    		'tanggal'=>$tanggal1
		    	]);
		 
		        $tanggal1 = date('Y-m-d',strtotime('+1 days',strtotime($tanggal1)));
		    }

		    

		    \Session::flash('sukses','Data berhasil disimpan');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect()->back();
    }
}
