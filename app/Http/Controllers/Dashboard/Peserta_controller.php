<?php
 
namespace App\Http\Controllers\Dashboard;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
use App\User;
use App\Models\Users_nilai;
use App\Models\Biodata;
use App\Models\Data_sekolah_sebelumnya;
use App\Models\Data_nilai_raport;
use App\Models\Data_prestasi_siswa;
 
class Peserta_controller extends Controller
{
    public function index(){
        $title = 'Data peserta';
        $data = User::withCount('biodata_r')->whereNull('role')->orderBy('name','asc')->get();
 
        return view('dashboard.peserta.index',compact('title','data'));
    }

    public function export($id){
        $dt = User::find($id);
        $title = 'Data Peserta '.$dt->name;
        // dd($dt);
        \Excel::create($title, function($excel) use($dt,$title) {
            $excel->sheet('Sheetname', function($sheet) use($dt,$title) {
 
                $sheet->loadView('dashboard.peserta.excel')->with('dt',$dt)->with('title',$title);
 
            });
        })->export('xls');
    }

    public function excel(Request $request){
        if($request->hasFile('sample_file')){
            $path = $request->file('sample_file')->getRealPath();
            $data = \Excel::load($path)->get();
            // dd($data);
            if($data->count()){
                // $uuid = \Uuid::generate(4);
                // $gr = $this->create_header_gr();
                // dd($gr);
                foreach ($data as $key => $vl) {
                    $nisn = (String)$vl->nisn;
                    $nilai_baca_quran = (Int)$vl->nilai_baca_quran;
                    $nilai_test_akademik = (Int)$vl->nilai_test_akademik;

                    Users_nilai::insert([
                        'nisn'=>$nisn,
                        'nilai_baca_quran'=>$nilai_baca_quran,
                        'nilai_test_akademik'=>$nilai_test_akademik,
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                    ]);
                }
            }
        }
        \Session::flash('sukses','Nilai berhasil di import');
        return redirect()->back();
    }
 
    public function diverifikasi(){
        $title = 'Data peserta yang sudah di verifikasi';
        $data = User::withCount('biodata_r')->where('is_verifikasi',1)->orderBy('name','asc')->get();
 
        return view('dashboard.peserta.index',compact('title','data'));
    }
 
    public function belum_verifikasi(){
        $title = 'Data peserta yang belum di verifikasi';
        $data = User::withCount('biodata_r')->whereNull('is_verifikasi')->orderBy('name','asc')->get();
 
        return view('dashboard.peserta.index',compact('title','data'));
    }

    public function edit($id){
        $title = 'Edit Data peserta';
        $dt = User::with('biodata_r')->find($id);
 
        return view('dashboard.peserta.edit',compact('title','dt'));
    }

    public function update(Request $request,$id){
        // $this->validate($request,[
        //     'name'=>'required',
        //     'nik'=>'required',
        //     'tempat_lahir'=>'required',
        //     'no_telp'=>'required',
        //     'jenis_kelamin'=>'required',
        //     'tanggal_lahir'=>'required',
        //     'email'=>'required'
        // ]);
 
        try {
            $data['name'] = $request->name;
            // $data['nisn'] = $request->nisn;
            $data['email'] = $request->email;
            $data['password'] = bcrypt('123');
            $data['id_registrasi'] = 'REG-'.rand();
            $data['jenis_kelamin'] = $request->jenis_kelamin;
            // $data['nisn'] = $request->nik;
     
            //cek poto
            $file = $request->file('photo');
            if($file){
                $file->move('uploads',$file->getClientOriginalName());
                $data['photo'] = 'uploads/'.$file->getClientOriginalName();
            }

            // biodata
            // $biodata['nik'] = $request->nik;
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
            
            \DB::transaction(function()use($data,$biodata,$sekolah,$nilai,$prestasi,$id){
                // $id_user = User::insertGetId($data);
                User::where('id',$id)->update($data);

                // $biodata['users'] = $id_user;
                // Biodata::insert($biodata);
                Biodata::where('users',$id)->update($biodata);

                // $sekolah['users'] = $id_user;
                // Data_sekolah_sebelumnya::insert($sekolah);
                Data_sekolah_sebelumnya::where('users',$id)->update($sekolah);

                // $nilai['users'] = $id_user;
                // Data_nilai_raport::insert($nilai);
                Data_nilai_raport::where('users',$id)->update($nilai);

                // $prestasi['users'] = $id_user;
                // Data_prestasi_siswa::insert($prestasi);
                Data_prestasi_siswa::where('users',$id)->update($prestasi);
            });
     
            \Session::flash('sukses','Data berhasil disimpan');
        } catch (\Exception $e) {
            // dd($e->getMessage());
            \Session::flash('gagal',$e->getMessage());
        }
 
        return redirect()->back();
    }

    public function delete($id){
        try {
            User::where('id',$id)->delete();
            \Session::flash('sukses','Data berhasil dihapus');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }

        return redirect()->back();
    }

    public function lulus($id){
        try {
            User::where('id',$id)->update([
                'is_lulus'=>1
            ]);
 
            \Session::flash('sukses','Peserta Diterima');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }
 
        return redirect('peserta');
    }
}