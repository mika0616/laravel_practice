<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	#idがnullでもエラーが出ないようにguardedで保護
	protected $guarded=array('id');
	#updated_atというカラムがないので$timestampsをfalseにする
	public $timestamps = false;

	public static $rules =array(
		'name'=>'required',
		'mail'=>'email',
		'age'=>'integer|min:0|max:150'
	);
	public function getData(){
		return $this->id.':'.$this->name.'('.$this->age.')';
	}
	#リレーション(hasOne)
	public function board(){
		return $this->hasOne('App\Board');
	}
	#リレーション(hasMany)
	public function boards(){
		return $this->hasMany('App\Board');
	}

}
