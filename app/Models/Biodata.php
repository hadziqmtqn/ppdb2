<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Biodata extends Model
{
    protected $table = 'biodata';

    public function userss(){
    	return $this->hasOne('App\User','id','users');
    }
}