<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\family_head as family_head;

use App\Model\disaster as disaster;

use App\Model\barangay as barangay;

class emergency extends Model
{

    protected $table = 'emergencies';

    protected $hidden = [ 'id' ];

    protected $fillable = [

    	'barangay_id',

    	'center_id',

    	'disaster',

    	'head_id',

    	'rent_price',

    	'house_condition'

    ];

    public function family_head()
    {

    	return $this->hasOne( family_head::class , 'head_id' , 'head_id' );

    }

    public function disaster()
    {

    	return $this->hasOne( disaster::class , 'id' , 'disaster_id' );

    }

    public function barangay()
    {

    	return $this->hasOne( barangay::class , 'id', 'barangay_id' );

    }

}
