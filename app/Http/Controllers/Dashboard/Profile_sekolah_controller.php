<?php
 
namespace App\Http\Controllers\Dashboard;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
use App\Models\Profile_sekolah;
 
class Profile_sekolah_controller extends Controller
{
    public function index(){
        $title = 'Update Profile Sekolah';
        $dt = Profile_sekolah::first();
 
        return view('dashboard.profile_sekolah.index',compact('title','dt'));
    }
 
    public function update(Request $request){
        $this->validate($request,[
            'kemenag_pusat'=>'required',
            'kemenag_kabko'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            'website'=>'required'
        ]);
 
        $dt = Profile_sekolah::first();
        $dt->kemenag_pusat = $request->kemenag_pusat;
        $dt->kemenag_kabko = $request->kemenag_kabko;
        $dt->nama = $request->nama;
        $dt->alamat = $request->alamat;
        $dt->website = $request->website;
        $dt->created_at = date('Y-m-d H:i:s');
        $dt->updated_at = date('Y-m-d H:i:s');
 
        $file = $request->file('photo');
        if($file){
            $nama_gambar = $file->getClientOriginalName();
            $file->move('sekolah_images',$nama_gambar);
 
            $dt->photo = 'sekolah_images/'.$nama_gambar;
        }
 
        $dt->save();
 
        \Session::flash('sukses','Data berhasil di update');
 
        return redirect()->back();
    }
}