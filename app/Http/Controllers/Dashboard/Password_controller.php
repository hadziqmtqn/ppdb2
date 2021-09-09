<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class Password_controller extends Controller
{
    public function index(){
    	$title = 'Ganti Password';

    	return view('dashboard.password.index',compact('title'));
    }

    public function update(Request $request){
    	try {
    		User::where('id',\Auth::user()->id)->update([
    			'password'=>bcrypt($request->password)
    		]);

    		\Session::flash('sukses','Password berhasil diubah');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect()->back();
    }
}
