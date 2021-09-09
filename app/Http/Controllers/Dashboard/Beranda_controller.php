<?php
 
namespace App\Http\Controllers\Dashboard;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
use App\Models\Biodata;
use App\Models\Data_sekolah_sebelumnya;
use App\User;
 
class Beranda_controller extends Controller
{
    public function index(){
        $title = 'Halaman Dashboard';
 
        $user_id = \Auth::user()->id;

        $jumlah_peserta = User::whereNull('role')->count();   

        $jumlah_laki = User::where('jenis_kelamin',1)->count();

        $jumlah_perempuan = User::where('jenis_kelamin',2)->count();

        $jumlah_sd = Data_sekolah_sebelumnya::where('asal_sekolah','sd')->count();

        $jumlah_mi = Data_sekolah_sebelumnya::where('asal_sekolah','mi')->count();
 
        $cek = Biodata::where('users',$user_id)->count();
        if($cek < 1){
            $pesan = 'Harap Melengkapi Biodata Terlebih Dahulu';
        }else{
            $pesan = 'Terima Kasih. Biodata Anda Sudah Lengkap';
        }
 
        $cek_verifikasi = User::find($user_id);
 
        if($cek_verifikasi->is_verifikasi == 1){
            $status = 'Status Sudah Di verifikasi';
        }else{
            $status = 'Belum Diverifikasi';
        }

        $cek_lulus = User::find($user_id);
        if($cek_lulus->is_lulus == 1){
            $pesan_lulus = 'Selamat Anda Diterima';
        }else{
            $pesan_lulus = '';
        }


 
        return view('dashboard.beranda.index',compact('title','pesan','cek','status','pesan_lulus','jumlah_peserta','jumlah_laki','jumlah_perempuan','jumlah_sd','jumlah_mi'));
    }
 
}