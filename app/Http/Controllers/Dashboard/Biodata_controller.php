<?php
 
namespace App\Http\Controllers\Dashboard;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
use App\Models\Biodata;
use App\Models\Data_nilai_raport;
use App\Models\Data_prestasi_siswa;
use App\Models\Data_sekolah_sebelumnya;
use App\User;
use App\Models\Profile_sekolah;
 
use PDF;
 
class Biodata_controller extends Controller
{
    public function index(){
        $title = 'Update Biodata';
        $dt = Biodata::where('users',\Auth::user()->id)->first();
        $cek = Biodata::where('users',\Auth::user()->id)->count();
 
        return view('dashboard.biodata.index',compact('title','dt','cek'));
    }
 
    public function store(Request $request,$id){
        $this->validate($request,[
            'nik'=>'required',
            'jk'=>'required',
            'agama'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'anak_ke'=>'nullable',
            'jumlah_saudara'=>'nullable',
            'hobi'=>'nullable',
            'cita_cita'=>'nullable',
            'no_hp'=>'nullable',
            'asal_sekolah'=>'nullable',
            'npsn_asal'=>'nullable',
            'nama_sek_asal'=>'nullable',
            'alamat_sek_asal'=>'nullable',
            'jenis_siswa_tinggal'=>'nullable',
            'alamat_siswa'=>'nullable',
            'propinsi_siswa'=>'nullable',
            'kabkota_siswa'=>'nullable',
            'desa_kelurahan_siswa'=>'nullable',
            'kodepos_siswa'=>'nullable',
            'jarak'=>'nullable',
            'transportasi'=>'nullable',
            'no_kk'=>'required',
            'nama_ayah'=>'required',
            'nik_ayah'=>'required',
            'tempat_lahir_ayah'=>'required',
            'tanggal_lahir_ayah'=>'required',
            'status_ayah'=>'required',
            'pendidikan_ayah'=>'required',
            'pekerjaan_ayah'=>'required',
            'nama_ibu'=>'required',
            'nik_ibu'=>'required',
            'tempat_lahir_ibu'=>'required',
            'tanggal_lahir_ibu'=>'required',
            'status_ibu'=>'required',
            'pendidikan_ibu'=>'required',
            'pekerjaan_ibu'=>'required',
            'nama_wali'=>'nullable',
            'nik_wali'=>'nullable',
            'tempat_lahir_wali'=>'nullable',
            'tanggal_lahir_wali'=>'nullable',
            'status_wali'=>'nullable',
            'pendidikan_wali'=>'nullable',
            'pekerjaan_wali'=>'nullable',
            'penghasilan_ortu'=>'required',
            'no_kks'=>'nullable',
            'no_pkh'=>'nullable',
            'no_kip'=>'nullable',
            'status_rumah_ortu'=>'nullable',
            'alamat_ortu'=>'nullable',
            'propinsi_ortu'=>'nullable',
            'kabkota_ortu'=>'nullable',
            'desa_kelurahan_ortu'=>'nullable',
            'kodepos_ortu'=>'nullable',
            'nilai_agama_51'=>'required',
            'nilai_agama_52'=>'required',
            'nilai_agama_61'=>'required',
            'nilai_bin_51'=>'required',
            'nilai_bin_52'=>'required',
            'nilai_bin_61'=>'required',
            'nilai_mat_51'=>'required',
            'nilai_mat_52'=>'required',
            'nilai_mat_61'=>'required',
            'nilai_ipa_51'=>'required',
            'nilai_ipa_52'=>'required',
            'nilai_ipa_61'=>'required',
            'prestasi'=>'nullable',
            'tingkat_prestasi'=>'nullable',
            'peringkat_prestasi'=>'nullable',
            'tahun_prestasi'=>'nullable'
        ]);
 
        $data['users'] = $id;
        $data['nik'] = $request->nik;
        $data['jk'] = $request->jk;
        $data['agama'] = $request->agama;
        $data['tempat_lahir'] = $request->tempat_lahir;
        $data['tanggal_lahir'] = $request->tanggal_lahir;
        $data['anak_ke'] = $request->anak_ke;
        $data['jumlah_saudara'] = $request->jumlah_saudara;
        $data['hobi'] = $request->hobi;
        $data['cita_cita'] = $request->cita_cita;
        $data['no_hp'] = $request->no_hp;
        $data['asal_sekolah'] = $request->asal_sekolah;
        $data['npsn_asal'] = $request->npsn_asal;
        $data['nama_sek_asal'] = $request->nama_sek_asal;
        $data['alamat_sek_asal'] = $request->alamat_sek_asal;
        $data['jenis_siswa_tinggal'] = $request->jenis_siswa_tinggal;
        $data['alamat_siswa'] = $request->alamat_siswa;
        $data['propinsi_siswa'] = $request->propinsi_siswa;
        $data['kabkota_siswa'] = $request->kabkota_siswa;
        $data['desa_kelurahan_siswa'] = $request->desa_kelurahan_siswa;
        $data['kodepos_siswa'] = $request->kodepos_siswa;
        $data['jarak'] = $request->jarak;
        $data['transportasi'] = $request->transportasi;
        $data['no_kk'] = $request->no_kk;
        $data['nama_ayah'] = $request->nama_ayah;
        $data['nik_ayah'] = $request->nik_ayah;
        $data['tempat_lahir_ayah'] = $request->tempat_lahir_ayah;
        $data['tanggal_lahir_ayah'] = $request->tanggal_lahir_ayah;
        $data['status_ayah'] = $request->status_ayah;
        $data['pendidikan_ayah'] = $request->pendidikan_ayah;
        $data['pekerjaan_ayah'] = $request->pekerjaan_ayah;
        $data['nama_ibu'] = $request->nama_ibu;
        $data['nik_ibu'] = $request->nik_ibu;
        $data['tempat_lahir_ibu'] = $request->tempat_lahir_ibu;
        $data['tanggal_lahir_ibu'] = $request->tanggal_lahir_ibu;
        $data['status_ibu'] = $request->status_ibu;
        $data['pendidikan_ibu'] = $request->pendidikan_ibu;
        $data['pekerjaan_ibu'] = $request->pekerjaan_ibu;
        $data['nama_wali'] = $request->nama_wali;
        $data['nik_wali'] = $request->nik_wali;
        $data['tempat_lahir_wali'] = $request->tempat_lahir_wali;
        $data['tanggal_lahir_wali'] = $request->tanggal_lahir_wali;
        $data['status_wali'] = $request->status_wali;
        $data['pendidikan_wali'] = $request->pendidikan_wali;
        $data['pekerjaan_wali'] = $request->pekerjaan_wali;
        $data['penghasilan_ortu'] = $request->penghasilan_ortu;
        $data['no_kks'] = $request->no_kks;
        $data['no_pkh'] = $request->no_pkh;
        $data['no_kip'] = $request->no_kip;
        $data['status_rumah_ortu'] = $request->status_rumah_ortu;
        $data['alamat_ortu'] = $request->alamat_ortu;
        $data['propinsi_ortu'] = $request->propinsi_ortu;
        $data['kabkota_ortu'] = $request->kabkota_ortu;
        $data['desa_kelurahan_ortu'] = $request->desa_kelurahan_ortu;
        $data['kodepos_ortu'] = $request->kodepos_ortu;
        $data['nilai_agama_51'] = $request->nilai_agama_51;
        $data['nilai_agama_52'] = $request->nilai_agama_52;
        $data['nilai_agama_61'] = $request->nilai_agama_61;
        $data['nilai_bin_51'] = $request->nilai_bin_51;
        $data['nilai_bin_52'] = $request->nilai_bin_52;
        $data['nilai_bin_61'] = $request->nilai_bin_61;
        $data['nilai_mat_51'] = $request->nilai_mat_51;
        $data['nilai_mat_52'] = $request->nilai_mat_52;
        $data['nilai_mat_61'] = $request->nilai_mat_61;
        $data['nilai_ipa_51'] = $request->nilai_ipa_51;
        $data['nilai_ipa_52'] = $request->nilai_ipa_52;
        $data['nilai_ipa_61'] = $request->nilai_ipa_61;
        $data['prestasi'] = $request->prestasi;
        $data['tingkat_prestasi'] = $request->tingkat_prestasi;
        $data['peringkat_prestasi'] = $request->peringkat_prestasi;
        $data['tahun_prestasi'] = $request->tahun_prestasi;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
 
        Biodata::insert($data);
 
        \Session::flash('sukses','Data berhasil di simpan');
 
        return redirect()->back();
    }
 
    public function update(Request $request,$id){
        $this->validate($request,[
            'nik'=>'required',
            'jk'=>'required',
            'agama'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'anak_ke'=>'nullable',
            'jumlah_saudara'=>'nullable',
            'hobi'=>'nullable',
            'cita_cita'=>'nullable',
            'no_hp'=>'nullable',
            'asal_sekolah'=>'nullable',
            'npsn_asal'=>'nullable',
            'nama_sek_asal'=>'nullable',
            'alamat_sek_asal'=>'nullable',
            'jenis_siswa_tinggal'=>'nullable',
            'alamat_siswa'=>'nullable',
            'propinsi_siswa'=>'nullable',
            'kabkota_siswa'=>'nullable',
            'desa_kelurahan_siswa'=>'nullable',
            'kodepos_siswa'=>'nullable',
            'jarak'=>'nullable',
            'transportasi'=>'nullable',
            'no_kk'=>'required',
            'nama_ayah'=>'required',
            'nik_ayah'=>'required',
            'tempat_lahir_ayah'=>'required',
            'tanggal_lahir_ayah'=>'required',
            'status_ayah'=>'required',
            'pendidikan_ayah'=>'required',
            'pekerjaan_ayah'=>'required',
            'nama_ibu'=>'required',
            'nik_ibu'=>'required',
            'tempat_lahir_ibu'=>'required',
            'tanggal_lahir_ibu'=>'required',
            'status_ibu'=>'required',
            'pendidikan_ibu'=>'required',
            'pekerjaan_ibu'=>'required',
            'nama_wali'=>'nullable',
            'nik_wali'=>'nullable',
            'tempat_lahir_wali'=>'nullable',
            'tanggal_lahir_wali'=>'nullable',
            'status_wali'=>'nullable',
            'pendidikan_wali'=>'nullable',
            'pekerjaan_wali'=>'nullable',
            'penghasilan_ortu'=>'required',
            'no_kks'=>'nullable',
            'no_pkh'=>'nullable',
            'no_kip'=>'nullable',
            'status_rumah_ortu'=>'nullable',
            'alamat_ortu'=>'nullable',
            'propinsi_ortu'=>'nullable',
            'kabkota_ortu'=>'nullable',
            'desa_kelurahan_ortu'=>'nullable',
            'kodepos_ortu'=>'nullable',
            'nilai_agama_51'=>'required',
            'nilai_agama_52'=>'required',
            'nilai_agama_61'=>'required',
            'nilai_bin_51'=>'required',
            'nilai_bin_52'=>'required',
            'nilai_bin_61'=>'required',
            'nilai_mat_51'=>'required',
            'nilai_mat_52'=>'required',
            'nilai_mat_61'=>'required',
            'nilai_ipa_51'=>'required',
            'nilai_ipa_52'=>'required',
            'nilai_ipa_61'=>'required',
            'prestasi'=>'nullable',
            'tingkat_prestasi'=>'nullable',
            'peringkat_prestasi'=>'nullable',
            'tahun_prestasi'=>'nullable'
        ]);
 
        // $data['users'] = $id;
        $data['users'] = $id;
        $data['nik'] = $request->nik;
        $data['jk'] = $request->jk;
        $data['agama'] = $request->agama;
        $data['tempat_lahir'] = $request->tempat_lahir;
        $data['tanggal_lahir'] = $request->tanggal_lahir;
        $data['anak_ke'] = $request->anak_ke;
        $data['jumlah_saudara'] = $request->jumlah_saudara;
        $data['hobi'] = $request->hobi;
        $data['cita_cita'] = $request->cita_cita;
        $data['no_hp'] = $request->no_hp;
        $data['asal_sekolah'] = $request->asal_sekolah;

        $sekolah['asal_sekolah'] = $request->asal_sekolah;
        $sekolah['users'] = $id;
        $sekolah['nama'] = $request->npsn_asal;
        $sekolah['npsn'] = $request->nama_sek_asal;
        $sekolah['alamat'] = $request->alamat_sek_asal;
        $sekolah['created_at'] = date('Y-m-d H:i:s');
        $sekolah['updated_at'] = date('Y-m-d H:i:s');

        $data['jenis_siswa_tinggal'] = $request->jenis_siswa_tinggal;
        $data['alamat_siswa'] = $request->alamat_siswa;
        $data['propinsi_siswa'] = $request->propinsi_siswa;
        $data['kabkota_siswa'] = $request->kabkota_siswa;
        $data['desa_kelurahan_siswa'] = $request->desa_kelurahan_siswa;
        $data['kodepos_siswa'] = $request->kodepos_siswa;
        $data['jarak'] = $request->jarak;
        $data['transportasi'] = $request->transportasi;
        $data['no_kk'] = $request->no_kk;
        $data['nama_ayah'] = $request->nama_ayah;
        $data['nik_ayah'] = $request->nik_ayah;
        $data['tempat_lahir_ayah'] = $request->tempat_lahir_ayah;
        $data['tanggal_lahir_ayah'] = $request->tanggal_lahir_ayah;
        $data['status_ayah'] = $request->status_ayah;
        $data['pendidikan_ayah'] = $request->pendidikan_ayah;
        $data['pekerjaan_ayah'] = $request->pekerjaan_ayah;
        $data['nama_ibu'] = $request->nama_ibu;
        $data['nik_ibu'] = $request->nik_ibu;
        $data['tempat_lahir_ibu'] = $request->tempat_lahir_ibu;
        $data['tanggal_lahir_ibu'] = $request->tanggal_lahir_ibu;
        $data['status_ibu'] = $request->status_ibu;
        $data['pendidikan_ibu'] = $request->pendidikan_ibu;
        $data['pekerjaan_ibu'] = $request->pekerjaan_ibu;
        $data['nama_wali'] = $request->nama_wali;
        $data['nik_wali'] = $request->nik_wali;
        $data['tempat_lahir_wali'] = $request->tempat_lahir_wali;
        $data['tanggal_lahir_wali'] = $request->tanggal_lahir_wali;
        $data['status_wali'] = $request->status_wali;
        $data['pendidikan_wali'] = $request->pendidikan_wali;
        $data['pekerjaan_wali'] = $request->pekerjaan_wali;
        $data['penghasilan_ortu'] = $request->penghasilan_ortu;
        $data['no_kks'] = $request->no_kks;
        $data['no_pkh'] = $request->no_pkh;
        $data['no_kip'] = $request->no_kip;
        $data['status_rumah_ortu'] = $request->status_rumah_ortu;
        $data['alamat_ortu'] = $request->alamat_ortu;
        $data['propinsi_ortu'] = $request->propinsi_ortu;
        $data['kabkota_ortu'] = $request->kabkota_ortu;
        $data['desa_kelurahan_ortu'] = $request->desa_kelurahan_ortu;
        $data['kodepos_ortu'] = $request->kodepos_ortu;

        $nilai['users'] = $id;
        $nilai['agama_5_1'] = $request->nilai_agama_51;
        $nilai['agama_5_2'] = $request->nilai_agama_52;
        $nilai['agama_6_1'] = $request->nilai_agama_61;
        $nilai['bahasa_5_1'] = $request->nilai_bin_51;
        $nilai['bahasa_5_2'] = $request->nilai_bin_52;
        $nilai['bahasa_6_1'] = $request->nilai_bin_61;
        $nilai['matematika_5_1'] = $request->nilai_mat_51;
        $nilai['matematika_5_2'] = $request->nilai_mat_52;
        $nilai['matematika_6_1'] = $request->nilai_mat_61;
        $nilai['ipa_5_1'] = $request->nilai_ipa_51;
        $nilai['ipa_5_2'] = $request->nilai_ipa_52;
        $nilai['ipa_6_1'] = $request->nilai_ipa_61;
        $nilai['ips_5_1'] = $request->nilai_ips_51;
        $nilai['ips_5_2'] = $request->nilai_ips_52;
        $nilai['ips_6_1'] = $request->nilai_ips_61;

        $prestasi['users'] = $id;
        $prestasi['prestasi'] = $request->prestasi;
        $prestasi['tingkat_prestasi'] = $request->tingkat_prestasi;
        $prestasi['peringkat_prestasi'] = $request->peringkat_prestasi;
        $prestasi['tahun_prestasi'] = $request->tahun_prestasi;
        $prestasi['created_at'] = date('Y-m-d H:i:s');
        $prestasi['updated_at'] = date('Y-m-d H:i:s');

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
 
        \DB::transaction(function()use($id,$data,$sekolah,$nilai,$prestasi){
            Biodata::where('users',$id)->update($data);
            Data_sekolah_sebelumnya::where('users',$id)->update($sekolah);
            Data_nilai_raport::where('users',$id)->update($nilai);
            Data_prestasi_siswa::where('users',$id)->update($prestasi);
        });
 
        \Session::flash('sukses','Data berhasil diupdate');
 
        return redirect()->back();
    }
 
    public function cetak(){
        try {
            $dt = User::where('id',\Auth::user()->id)->with(['biodata_r','jenis_kelamins'])->first();
            $sk = Profile_sekolah::first();

            $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadview('dashboard.biodata.pdf',compact('dt','sk'))->setPaper('a4', 'portrait');
            return $pdf->stream();
 
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage().' ! '.$e->getLine());
        }
 
        return redirect()->back();
    }
 
    public function cetak_pendaftaran(){
        try {
            $dt = User::where('id',\Auth::user()->id)->with(['biodata_r','jenis_kelamins'])->first();
            $sk = Profile_sekolah::first();

            $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadview('dashboard.biodata.pdf_pendaftaran',compact('dt','sk'))->setPaper('a4', 'portrait');
            return $pdf->stream();
 
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage().' ! '.$e->getLine());
        }
 
        return redirect()->back();
    }

}