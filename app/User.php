<?php
 
namespace App;
 
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
 
class User extends Authenticatable
{
    use Notifiable;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
 
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
 
    public function biodata_r(){
        return $this->hasOne('App\Models\Biodata','users','id')->withDefault(['no_hp'=>null,'alamat_siswa'=>null]);
    }

    public function jenis_kelamins(){
        return $this->belongsTo('App\Models\M_jenis_kelamin','jenis_kelamin');
    }

    public function nilais(){
        return $this->hasOne('App\Models\Data_nilai_raport','users');
    }

    public function prestasis(){
        return $this->hasOne('App\Models\Data_prestasi_siswa','users');
    }

    public function sekolahs(){
        return $this->hasOne('App\Models\Data_sekolah_sebelumnya','users');
    }
}