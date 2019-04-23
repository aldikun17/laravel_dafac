<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Model\emergency 		as emergency;

use App\Model\family_head 		as family_head;

use App\Model\family_affiliated as family_affiliated;

use PDF;

class DisasterController extends Controller
{

	protected function citizen_search_age($age)
	{

		switch ($age) {

			case 'infant':

					return family_affiliated::where('age','<',2)->get();

				break;

			case 'child':
				
					return family_affiliated::whereBetween('age',array(2,10))->get();

				break;

			case 'senior':

					return family_affiliated::whereBetween('age',array(60,120))->get();

				break;
			
			default:
				# code...
				break;
		}

	}

	protected function citizen_search_age_report($age)
	{

		if($age < 2):

			return family_affiliated::where('age','<',2)->get();

		elseif($age > 2 && $age <= 10):

			return family_affiliated::whereBetween('age',array(2,10))->get();

		elseif($age >= 60 && $age <= 120):

			return family_affiliated::whereBetween('age',array(60,120))->get();

		endif;


	}
    
	public function create_disaster_records( Request $request )
	{

		$family_head = family_head::orderBy('id','desc')->first();

		$head_id = date('Y').'-'.date('m').'-0000001';

		if(empty($family_head['id']))
		{

			$family_head = new family_head;

			$family_head->head_id 		= $head_id ;

			$family_head->last_name		= $request['head_surname'];

			$family_head->first_name    = $request['head_given'];

			$family_head->middle_name   = $request['head_mi'];

			$family_head->address 		= $request['head_address'];

			$family_head->age			= $request['head_age'];

			$family_head->occupation	= $request['head_occupation'];

			$family_head->monly_income	= $request['head_income'];

			$family_head->save();

			$this->create_affialiated_records( $request->all() , $head_id );


		}	else {

			$new_head_id = substr($family_head['head_id'], 14,14) + 1;

			$counter_head_id = substr($family_head['head_id'], 0,14).$new_head_id;

			echo $counter_head_id;

			$family_head = new family_head;

			$family_head->head_id 		= $counter_head_id;

			$family_head->name			= $request['head_surname'].', '.$request['head_given'].' '.$request['head_mi'];

			$family_head->address 		= $request['head_address'];

			$family_head->age			= $request['head_age'];

			$family_head->occupation	= $request['head_occupation'];

			$family_head->monly_income	= $request['head_income'];

			$family_head->save();

			$this->create_affialiated_records( $request->all() , $counter_head_id );

		}

		return back()->with('disaster_registered','Assistance Registered Successfully');
		
	}

	protected function create_affialiated_records( $request , $head_id )
	{

		$family_affiliated 				= new family_affiliated;

		$family_affiliated->head_id 	= $head_id;

		$family_affiliated->name 		= $request['family_name'];

		$family_affiliated->age 		= $request['family_age'];

		$family_affiliated->relation 	= $request['family_relation'];

		$family_affiliated->sex 		= $request['family_gender'];

		$family_affiliated->occupation 	= $request['family_occupation'];

		$family_affiliated->health 		= $request['family_health'];

		$family_affiliated->remarks 	= $request['family_remarks'];

		$family_affiliated->save();

		if(!empty($request['member_name'])):

			$this->create_multiple_affiliated( $request , $head_id );

		endif;

	}

	protected function create_multiple_affiliated( $request , $head_id )
	{

		foreach($request['member_name'] as $key => $member):

			$family_affiliated 				= new family_affiliated;

			$family_affiliated->head_id 	= $head_id;

			$family_affiliated->name 		= $request['member_name'][$key];

			$family_affiliated->age 		= $request['member_age'][$key];

			$family_affiliated->relation 	= $request['member_relation'][$key];

			$family_affiliated->sex 		= $request['member_sex'][$key];

			$family_affiliated->occupation 	= $request['member_occupation'][$key];

			$family_affiliated->health 		= $request['member_health'][$key];

			$family_affiliated->remarks 	= $request['member_remarks'][$key];

			$family_affiliated->save();

		endforeach;

		$this->create_emergency( $request , $head_id );

	}

	protected function create_emergency( $request , $head_id )
	{

		if($request['residency'] == 'renter')
		{

			$emergency = new emergency;

			$emergency->barangay_id 	=	$request['barangay'];

			$emergency->center_id 		=	$request['evacuation_center'];

			$emergency->disaster_id 	= 	$request['disaster_id'];

			$emergency->head_id 		=	$head_id;

			$emergency->rent_price 		=	$request['residency'].': '.$request['head_income'];

			$emergency->house_condition	= 	$request['house_status'];

			$emergency->save();


		}	else {

			$emergency = new emergency;

			$emergency->barangay_id 	=	$request['barangay'];

			$emergency->center_id 		=	$request['evacuation_center'];

			$emergency->disaster_id 	= 	$request['disaster_id'];

			$emergency->head_id 		=	$head_id;

			$emergency->rent_price 		=	$request['residency'];

			$emergency->house_condition	= 	$request['house_status'];

			$emergency->save();

		}


	}

	public function search_disasters($age = null,Request $request)
	{
		
		if(empty($request['age'])):

			$age = $request['age'];

			return view('web.search_citizen',compact('age'));

		else:

			$age = $this->citizen_search_age($request['age']);
			
			return view('web.search_citizen',compact('age'));

		endif;

		
	}

	public function generate_citizen_pdf($age)
	{

		if(empty($age)):

			return view('web.search_citizen',compact('age'));

		else:

			$age = $this->citizen_search_age_report($age);

			$pdf = PDF::loadView('web.citizen_search_report',compact('age'));
			$pdf->setPaper([0, 0, 1300, 1300], 'portrait');
			return $pdf->download(date('Y-m-d').'_citizen_search_DAFAC'.'.pdf');

		endif;

	}



}
