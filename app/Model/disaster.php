<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\emergency as emergency;

class disaster extends Model
{
    
	protected $table = 'disasters';

	protected $hidden = [ 'id' ];

	public function emergency()
	{

		return $this->belongsTo( emergency::class , 'barangay_id' , 'id' );

	}

}