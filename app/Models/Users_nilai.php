<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Data_nilai_raport;

class Users_nilai extends Model
{
    protected $table = 'users_nilai';

    public function nisns(){
    	return $this->belongsTo('App\User','nisn','nisn');
    }

    public function nilai_akhir(){
    	$nilai_rata2 = $this->nilai_rata2();

    	$rapot = (30 / 100) * $nilai_rata2;
    	$tes = (30 / 100) * $this->nilai_test_akademik;
    	$quran = (30 / 100) * $this->nilai_test_akademik;

    	$hasil = $rapot + $tes + $quran;
    	$hasil = number_format($hasil,2);

    	return $hasil;
    }

    public function nilai_rata2(){
    	$user = $this->nisns->id;
    	$dt = Data_nilai_raport::where('users',$user)->first();

    	if(isset($dt)){
    		$agama_5_1 = $dt->agama_5_1;
	    	$agama_5_2 = $dt->agama_5_2;
	    	$agama_6_1 = $dt->agama_6_1;

	    	$bahasa_5_1 = $dt->bahasa_5_1;
	    	$bahasa_5_2 = $dt->bahasa_5_2;
	    	$bahasa_6_1 = $dt->bahasa_6_1;

	    	$matematika_5_1 = $dt->matematika_5_1;
	    	$matematika_5_2 = $dt->matematika_5_2;
	    	$matematika_6_1 = $dt->matematika_6_1;

	    	$ipa_5_1 = $dt->ipa_5_1;
	    	$ipa_5_2 = $dt->ipa_5_2;
	    	$ipa_6_1 = $dt->ipa_6_1;

	    	$ips_5_1 = $dt->ips_5_1;
	    	$ips_5_2 = $dt->ips_5_2;
	    	$ips_6_1 = $dt->ips_6_1;

	    	$nilai = ($agama_5_1 + $agama_5_2 + $agama_6_1 + $bahasa_5_1 + $bahasa_5_2 + $bahasa_6_1 + $matematika_5_1 + $matematika_5_2 + $matematika_6_1 + $ipa_5_1 + $ipa_5_2 + $ipa_6_1 + $ips_5_1 + $ips_5_2 + $ips_6_1) / 15;
	    	$nilai = number_format($nilai,2);
    	}else{
    		$nilai = null;
    	}

    	return $nilai;
    }
}
