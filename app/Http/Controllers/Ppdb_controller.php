<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\User;
use App\Models\M_jenis_kelamin;
use App\Models\Biodata;
use App\Models\Data_sekolah_sebelumnya;
use App\Models\Data_nilai_raport;
use App\Models\Data_prestasi_siswa;
 
class Ppdb_controller extends Controller
{
    public function index(){
        $title = 'PPDB Online';
        $kelamin = M_jenis_kelamin::get();
 
        return view('ppdb.index',compact('title','kelamin'));
    }
 
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'nik'=>'required',
            'tempat_lahir'=>'required',
            'no_telp'=>'required',
            'jenis_kelamin'=>'required',
            'tanggal_lahir'=>'required',
            'email'=>'required'
        ]);
 
        try {
            $data['name'] = $request->name;
            $data['nisn'] = $request->nisn;
            $data['email'] = $request->email;
            $data['password'] = bcrypt('123');
            $data['id_registrasi'] = 'REG-'.rand();
            $data['jenis_kelamin'] = $request->jenis_kelamin;
            $data['nisn'] = $request->nik;
     
            //cek poto
            $file = $request->file('photo');
            if($file){
                $file->move('uploads',$file->getClientOriginalName());
                $data['photo'] = 'uploads/'.$file->getClientOriginalName();
            }

            // biodata
            $biodata['nik'] = $request->nik;
            $biodata['tempat_lahir'] = $request->tempat_lahir;
            $biodata['tanggal_lahir'] = date('Y-m-d',strtotime($request->tanggal_lahir));
            $biodata['no_hp'] = $request->no_telp;
            $biodata['created_at'] = date('Y-m-d H:i:s');
            $biodata['updated_at'] = date('Y-m-d H:i:s');

            // sekolah sebelumnya
            $sekolah['asal_sekolah'] = $request->asal_sekolah;
            $sekolah['nama'] = $request->nama_sekolah_asal;
            $sekolah['npsn'] = $request->npsn;
            $sekolah['alamat'] = $request->alamat_sekolah_asal;
            $sekolah['created_at'] = date('Y-m-d H:i:s');
            $sekolah['updated_at'] = date('Y-m-d H:i:s');

            $nilai['agama_5_1'] = $request->agama_5_1;
            $nilai['agama_5_2'] = $request->agama_5_2;
            $nilai['agama_6_1'] = $request->agama_6_1;
            $nilai['bahasa_5_1'] = $request->bahasa_5_1;
            $nilai['bahasa_5_2'] = $request->bahasa_5_2;
            $nilai['bahasa_6_1'] = $request->bahasa_6_1;
            $nilai['matematika_5_1'] = $request->matematika_5_1;
            $nilai['matematika_5_2'] = $request->matematika_5_2;
            $nilai['matematika_6_1'] = $request->matematika_6_1;
            $nilai['ipa_5_1'] = $request->ipa_5_1;
            $nilai['ipa_5_2'] = $request->ipa_5_2;
            $nilai['ipa_6_1'] = $request->ipa_6_1;
            $nilai['ips_5_1'] = $request->ips_5_1;
            $nilai['ips_5_2'] = $request->ips_5_2;
            $nilai['ips_6_1'] = $request->ips_6_1;
            $nilai['created_at'] = date('Y-m-d H:i:s');
            $nilai['updated_at'] = date('Y-m-d H:i:s');

            // prestasi
            $prestasi['prestasi'] = $request->prestasi;
            $prestasi['peringkat_prestasi'] = $request->peringkat_prestasi;
            $prestasi['tingkat_prestasi'] = $request->tingkat_prestasi;
            $prestasi['tahun_prestasi'] = $request->tahun_prestasi;
            // insert
            
            \DB::transaction(function()use($data,$biodata,$sekolah,$nilai,$prestasi){
                $id_user = User::insertGetId($data);

                $biodata['users'] = $id_user;
                Biodata::insert($biodata);

                $sekolah['users'] = $id_user;
                Data_sekolah_sebelumnya::insert($sekolah);

                $nilai['users'] = $id_user;
                Data_nilai_raport::insert($nilai);

                $prestasi['users'] = $id_user;
                Data_prestasi_siswa::insert($prestasi);
            });
     
            \Session::flash('sukses','Pendaftaran berhasil dilakukan, silahkan login dengan Email yang di daftarkan dan Password 123');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
 
        return redirect('ppdb');
    }
}