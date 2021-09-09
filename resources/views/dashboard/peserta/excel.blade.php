<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 
    
 
   
   
</head>
<body>
   
   <table id="table-datatables" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>ID Registrasi</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>NIK</th>
                                <th>No HP</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Agama</th>
                                <th>Anak Ke</th>
                                <th>Jumlah Saudara</th>
                                <th>Hobi</th>
                                <th>Cita-cita</th>
                                <th>Asal Sekolah</th>
                                <th>NPSN Sekolah Asal</th>
                                <th>Nama Sekolah Asal</th>
                                <th>Alamat Sekolah Asal</th>
                                <th>Siswa Tinggal</th>
                                <th>Alamat Siswa</th>
                                <th>Propinsi</th>
                                <th>Kabupaten/Kota</th>
                                <th>Desa/Kelurahan</th>
                                <th>Kodepos</th>
                                <th>Jarak</th>
                                <th>Transportasi</th>
                                <th>No KK</th>
                                <th>Nama Ayah</th>
                                <th>NIK Ayah</th>
                                <th>Tempat Lahir Ayah</th>
                                <th>Tanggal Lahir Ayah</th>
                                <th>Status Ayah</th>
                                <th>Pendidikan Ayah</th>
                                <th>Pekerjaan Ayah</th>
                                <th>Nama Ibu</th>
                                <th>NIK Ibu</th>
                                <th>Tempat Lahir Ibu</th>
                                <th>Tanggal Lahir Ibu</th>
                                <th>Status Ibu</th>
                                <th>Pendidikan Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Nama Wali</th>
                                <th>NIK Wali</th>
                                <th>Tempat Lahir Wali</th>
                                <th>Tanggal Lahir Wali</th>
                                <th>Status Wali</th>
                                <th>Pendidikan Wali</th>
                                <th>Pekerjaan Wali</th>
                                <th>Penghaslan Ortu</th>
                                <th>No KKS</th>
                                <th>No PKH</th>
                                <th>No KIP</th>
                                <th>Status Rumah Ortu</th>
                                <th>Alamat Ortu</th>
                                <th>Propinsi</th>
                                <th>Kabupaten/Kota ortu</th>
                                <th>Desa/Kelurahan Ortu</th>
                                <th>Kodepos Ortu</th>
                                <th>Nilai Agama 5.1</th>
                                <th>Nilai Agama 5.2</th>
                                <th>Nilai Agama 6.1</th>
                                <th>Nilai BIN 5.1</th>
                                <th>Nilai BIN 5.2</th>
                                <th>Nilai BIN 6.1</th>
                                <th>Nilai MAT 5.1</th>
                                <th>Nilai MAT 5.2</th>
                                <th>Nilai MAT 6.1</th>
                                <th>Nilai IPA 5.1</th>
                                <th>Nilai IPA 5.2</th>
                                <th>Nilai IPA 6.1</th>
                                <th>Prestasi</th>
                                <th>Tingkat Prestasi</th>
                                <th>Peringkat Prestasi</th>
                                <th>Tahun Prestasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                
                                {{-- <td>
                                    <img src="{{ asset($dt->photo) }}" style="width: 100px;">
                                </td> --}}
                                <td>{{ $dt->id_registrasi }}</td>
                                <td>{{ $dt->name }}</td>
                                <td>{{ $dt->nisn }}</td>
                                <td>{{ $dt->biodata_r->nik }}</td>
                                <td>{{ $dt->biodata_r->no_hp }}</td>
                                <td>{{ $dt->jenis_kelamins->nama }}</td>
                                <td>{{ $dt->biodata_r->tempat_lahir }}</td>
                                <td>{{ $dt->biodata_r->tanggal_lahir }}</td>
                                <td>{{ $dt->biodata_r->agama }}</td>
                                <td>{{ $dt->biodata_r->anak_ke }}</td>
                                <td>{{ $dt->biodata_r->jumlah_saudara }}</td>
                                <td>{{ $dt->biodata_r->hobi }}</td>
                                <td>{{ $dt->biodata_r->cita_cita }}</td>
                                <td>{{ $dt->biodata_r->asal_sekolah }}</td>
                                <td>{{ $dt->biodata_r->npsn_asal }}</td>
                                <td>{{ $dt->biodata_r->nama_sek_asal }}</td>
                                <td>{{ $dt->biodata_r->alamat_sek_asal }}</td>
                                <td>{{ $dt->biodata_r->jenis_siswa_tinggal }}</td>
                                <td>{{ $dt->biodata_r->alamat_siswa }}</td>
                                <td>{{ $dt->biodata_r->propinsi_siswa }}</td>
                                <td>{{ $dt->biodata_r->kabkota_siswa }}</td>
                                <td>{{ $dt->biodata_r->desa_kelurahan_siswa }}</td>
                                <td>{{ $dt->biodata_r->kodepos_siswa }}</td>
                                <td>{{ $dt->biodata_r->jarak }}</td>
                                <td>{{ $dt->biodata_r->transportasi }}</td>
                                <td>{{ $dt->biodata_r->no_kk }}</td>
                                <td>{{ $dt->biodata_r->nama_ayah }}</td>
                                <td>{{ $dt->biodata_r->nik_ayah }}</td>
                                <td>{{ $dt->biodata_r->tempat_lahir_ayah }}</td>
                                <td>{{ $dt->biodata_r->tanggal_lahir_ayah }}</td>
                                <td>{{ $dt->biodata_r->status_ayah }}</td>
                                <td>{{ $dt->biodata_r->pendidikan_ayah }}</td>
                                <td>{{ $dt->biodata_r->pekerjaan_ayah }}</td>
                                <td>{{ $dt->biodata_r->nama_ibu }}</td>
                                <td>{{ $dt->biodata_r->nik_ibu }}</td>
                                <td>{{ $dt->biodata_r->tempat_lahir_ibu }}</td>
                                <td>{{ $dt->biodata_r->tanggal_lahir_ibu }}</td>
                                <td>{{ $dt->biodata_r->status_ibu }}</td>
                                <td>{{ $dt->biodata_r->pendidikan_ibu }}</td>
                                <td>{{ $dt->biodata_r->pekerjaan_ibu }}</td>
                                <td>{{ $dt->biodata_r->nama_wali }}</td>
                                <td>{{ $dt->biodata_r->nik_wali }}</td>
                                <td>{{ $dt->biodata_r->tempat_lahir_wali }}</td>
                                <td>{{ $dt->biodata_r->tanggal_lahir_wali }}</td>
                                <td>{{ $dt->biodata_r->status_wali }}</td>
                                <td>{{ $dt->biodata_r->pendidikan_wali }}</td>
                                <td>{{ $dt->biodata_r->pekerjaan_wali }}</td>
                                <td>{{ $dt->biodata_r->penghasilan_ortu }}</td>
                                <td>{{ $dt->biodata_r->no_kks }}</td>
                                <td>{{ $dt->biodata_r->no_pkh }}</td>
                                <td>{{ $dt->biodata_r->no_kip }}</td>
                                <td>{{ $dt->biodata_r->status_rumah_ortu }}</td>
                                <td>{{ $dt->biodata_r->alamat_ortu }}</td>
                                <td>{{ $dt->biodata_r->propinsi_ortu }}</td>
                                <td>{{ $dt->biodata_r->kabkota_ortu }}</td>
                                <td>{{ $dt->biodata_r->desa_kelurahan_ortu }}</td>
                                <td>{{ $dt->biodata_r->kodepos_ortu }}</td>
                                <td>{{ $dt->nilais->agama_5_1 }}</td>
                                <td>{{ $dt->nilais->agama_5_2 }}</td>
                                <td>{{ $dt->nilais->agama_6_1 }}</td>
                                <td>{{ $dt->nilais->bahasa_5_1 }}</td>
                                <td>{{ $dt->nilais->bahasa_5_2 }}</td>
                                <td>{{ $dt->nilais->bahasa_6_1 }}</td>
                                <td>{{ $dt->nilais->matematika_5_1 }}</td>
                                <td>{{ $dt->nilais->matematika_5_2 }}</td>
                                <td>{{ $dt->nilais->matematika_6_1 }}</td>
                                <td>{{ $dt->nilais->ipa_5_1 }}</td>
                                <td>{{ $dt->nilais->ipa_5_2 }}</td>
                                <td>{{ $dt->nilais->ipa_6_1 }}</td>
                                <td>{{ $dt->prestasis->prestasi }}</td>
                                <td>{{ $dt->prestasis->tingkat_prestasi }}</td>
                                <td>{{ $dt->prestasis->peringkat_prestasi }}</td>
                                <td>{{ $dt->prestasis->tahun_prestasi }}</td>
                                

                            </tr>
                        </tbody>
                    </table>

</body>
</html>