<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Users_nilai;

class Laporan_nilai_controller extends Controller
{
    public function index(){
    	$title = 'Laporan Nilai';
    	$data = Users_nilai::with('nisns')->get();

    	return view('dashboard.laporan_nilai.index',compact('title','data'));
    }
}
