<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\emergency as emergency;

class barangay extends Model
{
    
	protected $table = 'barangay';

	protected $hidden = [ 'id' ];

	protected $fillable = [

		'barangay_name'

	];

	public function emergency()
	{

		return $this->belongsTo( emergency::class , 'barangay_id' , 'id' );

	}

}
