<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Model\barangay as barangay;

use App\Model\disaster as disaster;

use App\Model\emergency as emergency;

use App\Model\evacuation as evacuation;

use App\Model\family_head as family_head;

use PDF;


class WebViewController extends Controller
{

	protected function family_head($head_id)
	{

		return family_head::where('head_id',$head_id)->first();

	}

	protected function barangay( $barangay_id )
	{

		return barangay::where('id',$barangay_id)->first()['barangay_name'];

	}
    
	protected function centers( $center_id )
	{

		return evacuation::where('id',$center_id)->first()['name_facility'];

	}

	protected function disasters( $disaster_id )
	{

		return disaster::where('id',$disaster_id)->first()['disaster_type'];

	}

	public function web_view()
	{
		$evacuation  = evacuation::all();

		$barangay = barangay::all();

		$disaster = disaster::all();

		return view( 'web.form' , compact( 'barangay' , 'disaster' , 'evacuation' ) );

	}

	public function disasters_view()
	{

		$emergency = emergency::all();

		$evacuation = evacuation::all();

		return view( 'web.disasters' , compact( 'emergency' , 'evacuation' ) );

	}

	public function disasters_head($head_id)
	{

		$head 			= $this->family_head($head_id);

		$barangay 		= $this->barangay($head->emergency['barangay_id']);

		$centers 		= $this->centers($head->emergency['center_id']);

		$disaster 		= $this->disasters($head->emergency['disaster_id']);

		return view('web.disaster_head',compact('head','barangay','centers','disaster'));

	}

	public function generate_pdf( Request $request )
	{

		$emergency = emergency::where('center_id',$request['disaster_id'])
							  ->where('created_at','>', $request['start_date'] )
							  ->where('created_at','<=', $request['end_date'])->get();

		$pdf = PDF::loadView('reports.report' , compact( 'emergency' ));
		$pdf->setPaper([0, 0, 900, 800], 'portrait');

		//return view('reports.report' , compact( 'emergency' ));

		return $pdf->download($request['start_date'].'DAFAC'.'.pdf');

	}


}
