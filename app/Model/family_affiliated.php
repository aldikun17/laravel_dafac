<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class family_affiliated extends Model
{
    
	protected $table = 'family_affiliated';

	protected $hidden = [ 'id' ];

	protected $fillable = [

		'head_id',

		'name',

		'age',

		'relation',

		'sex',

		'occupation',

		'health',

		'remarks'	

	];

	public function family_head()
	{

		return $this->belongsTo( family_head::class , 'head_id' , 'head_id' );

	}

	

}
