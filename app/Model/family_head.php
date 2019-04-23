<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\emergency as emergency;

use App\Model\family_affiliated as family_affiliated;

class family_head extends Model
{
    
	protected $table = 'family_head';

	protected $hidden = [ 'id' ];

	protected $fillable = [

		'head_id',

		'last_name',

		'first_name',

		'middle_name',

		'address',

		'age',

		'occupation',

		'monthly_income'


	];


	public function emergency()
	{

		return $this->belongsTo( emergency::class , 'head_id' , 'head_id' );

	}

	public function family_affiliated()
	{

		return $this->hasMany( family_affiliated::class , 'head_id' , 'head_id' );

	}



}
