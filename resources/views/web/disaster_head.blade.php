@extends('web.home')
@section('content')

<style type="text/css">
	
	@media print {  
	  @page {
	    size: 350mm 400mm; /* landscape */
	    /* you can also specify margins here: */
	    
	  }
	}

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
        
    th,
    td {
        padding: 5px;
        text-align: center;
    }

    table, td, th {
	  border: 3px solid black;
	}

</style>

<div class="row" style="font-size:18px;">

	<div class="col-md-8">
				
		<div class="form-group">
					
			<div class="col-md-3">
						
				<label> Barangay: </label>

			</div>

			<div class="col-md-9 form-group">
						
				<label>{{ $barangay }}</label>

			</div>

		</div>

	</div>

	<div class="col-md-4">
				
		<div class="form-group">

			<div class="col-md-3">
							
				<label> Date: </label>

			</div>

			<div class="col-md-9 form-group">
							
				<label> {{date('F-d-Y',strtotime($head->created_at))}} </label>

			</div>

		</div>
			
	</div>
		
</div>

		<div class="row" style="font-size:18px;">

			<div class="col-md-8">

				<div class="form-group">

					<div class="col-md-4">
						
						<label> Evacuation Center: </label>

					</div>

					<div class="col-md-8 form-group" style="margin-left: -29px;">

						<label> {{ $centers }} </label>
						
					</div>

				</div>
				
			</div>

			<div class="col-md-4">

				<div class="form-group">

					<div class="col-md-3">
									
						<label> Disaster: </label>

					</div>

					<div class="col-md-9 form-group">
									
						<label> {{ ucwords($disaster) }} </label>

					</div>

				</div>
				
			</div>
			
		</div>

		<legend> Head of Family </legend>

		<div class="row" style="font-size:18px;">
			
			<div class="col-md-4">

				<div class="form-group">

					<div class="col-md-4">
						
						<label> Surname: </label>

					</div>

					<div class="col-md-8 form-group"  style="letter-spacing: 3px">
						
						<label> {{ $head->last_name  }} </label>

					</div>
					
				</div>
				
			</div>

			<div class="col-md-4" style="margin-left: -40px;">

				<div class="form-group">

					<div class="col-md-4">
						
						<label style="margin-left: 20px;"> Given: </label>

					</div>

					<div class="col-md-8 form-group"  style="letter-spacing: 3px">
						
						<label> {{ $head->first_name  }} </label>

					</div>
					
				</div>
				
			</div>

			<div class="col-md-4">

				<div class="form-group">

					<div class="col-md-4">
						
						<label style="margin-left: -50px;"> MI: </label>

					</div>

					<div class="col-md-8 form-group" style="letter-spacing: 3px">
						
						<label> {{ $head->middle_name  }} </label>

					</div>
					
				</div>
				
			</div>

		</div>

		<div class="row" style="font-size:18px;">

			<div class="col-md-12">

				<div class="col-md-2">

					<label> Address: </label>
					
				</div>

				<div class="col-md-10 form-group" style="letter-spacing:  3px;">
					
					<label>	 {{ $head->address  }} </label>

				</div>
				
			</div>
			
		</div>

		<div class="row" style="font-size:18px;">

			<div class="col-md-4">
				
				<div class="form-group">
					
					<div class="col-md-4">
						
						<label> Age: </label>

					</div>

					<div class="col-md-8 form-group" style="letter-spacing: 3px">
						
						<label>	{{ $head->age  }} </label>

					</div>


				</div>

			</div>

			<div class="col-md-4">

				<div class="form-group">
					
					<div class="col-md-4">
						
						<label> Occupation: </label>

					</div>

					<div class="col-md-8 form-group" style="letter-spacing: 3px">
						
						<label> {{ $head->occupation  }}	</label>

					</div>

				</div>
				
			</div>

			<div class="col-md-4">
				
				<div class="form-group">

					<div class="col-md-4">
						 
						<label style="margin-left: -25px;"> Income: </label>

					</div>

					<div class="col-md-8 form-group"  style="letter-spacing: 3px">

						<label>  {{ number_format( $head->monly_income ) }}	</label>
						
					</div>
					
				</div>

			</div>
			
		</div>

		<hr>

		<div class="row" style="font-size:18px;">

			<div class="col-md-12" style="margin-top: 10px;margin-bottom: 10px;">

				<legend> Family Compound </legend>

				<table class="table table-striped table-bordered" id="parent_table" style="margin-top:10px;">
					
					<thead>
						
						<tr>
							
							<th><center> Name </center></th>
							<th width="50px;"><center> Age  </center></th>

							<th width="100px;"><center> Relation  </center></th>

							<th width="80px;"><center> Sex  </center></th>

							<th width="150px;"><center> Occupation  </center></th>

							<th width="150px;"><center> Health  </center></th>

							<th width="150px;"><center> Remarks  </center></th>

						</tr>

					</thead>

					<tbody>

						@foreach($head->family_affiliated as $family)

							<tr>
								
								<td>

									<label style="margin-top: 5px;"> {{ $family->name }}  </label>

								</td>

								<td>

									<label style="margin-top: 5px;text-align: center;margin-left:5px;"> {{ $family->age }} </label>

								</td>

								<td>

									<label style="margin-top: 5px;text-align: center;margin-left:15px;"> {{ $family->relation }} </label>

								</td>

								<td>

									<label> {{ $family->sex }} </label>

								</td>

								<td>

									<label> {{ $family->occupation }} </label>

								</td>

								<td>

									<label> {{ $family->health }} </label>

								</td>

								<td>

									<label> {{ $family->remarks }} </label>

								</td>

							</tr>

						@endforeach

					</tbody>

				</table>
				
			</div>

			<div class="col-md-12" style="font-size:18px;">

				<div class="col-md-3">
					
					<div style="border: 1px solid black;height: 150px;position: relative;">
						

					</div>
					<center><label> Thumb Mark </label></center>


				</div>

				<div class="col-md-4" style="height: 150px;text-align: center;">

					<div class="radio">

					  <label style="margin-bottom:110px;">

					  	{{ucwords($head->emergency['rent_price'])}}

					  </label>

					</div>

					<div style="position: 	relative;border: 2px solid black; margin-top: 0px;">
						
					</div>
					<label> Signiture Over Printed Name </label>
					

				</div>

				<div class="col-md-5">
					
					<div  style="border: 1px solid black;padding: 20px;">

						<label> Codes: </label>

						<br>

						<label> A - Elderly  </label> <label class="pull-right"> D - Pregnant Women </label><br>

						<label> B - PWD  </label> <label class="pull-right"> E - Lactating Women </label>

						<br>

						<label> C - Infant  </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label> F - Children </label>
						

					</div>

					<div style="border: 1px solid black;padding-bottom: 10px;padding: 20px">

						<label> Housing Condition: </label><br>
						
						<label style="position: relative;left:25%">
							
							{{ ucwords($head->emergency['house_condition']) }}

						</label>
						

					</div>

				</div>

			</div>

			<div class="col-md-12" style="margin-top: 50px">

				<div class="col-md-4">
					
					<ul class="list list-unstyled">

						<li><label> INTERVIEWED BY: </label></li>

						<li></li>
						<li>
							<div style="position: 	relative;border: 2px solid black; margin-top: 100px;">
						
							</div>
						</li>
						<li> <label> CSWDO - COORDINATOR/BRGY. BASE </label> </li>
						
					</ul>

				</div>

				<div class="col-md-4">
					
				</div>

				<div class="col-md-4">

					<ul class="list list-unstyled">

						<li><label> VALIDATED BY: </label></li>

						<li></li>
						<li>
							<div style="position: 	relative;border: 2px solid black; margin-top: 100px;">
						
							</div>
						</li>
						<li> <label> CSWDO - COORDINATOR/BRGY. BASE </label> </li>
						
					</ul>
					
				</div>
				
			</div>

			<div class="col-md-4 col-md-offset-4" style="margin-top:40px;">

				<ul class="list list-unstyled">

						<li></li>

						<li>
							<div style="position: 	relative;border: 2px solid black; margin-top: 100px;">
						
							</div>
						</li>
						<li style="text-align: center"> <label> JURITA P. OLVIDO, RSW </label> </li>
						<li style="text-align: center"><label> CSWDO - COORDINATOR/BRGY. BASE </label></li>
						
					</ul>
				
			</div>


		<div class="col-md-12" style="margin-top:270px;margin-left:-200px;margin-top:30px;width: 1370px;">

				<table style="width: 100%">

					<thead>

						<tr>

				            <th rowspan="2"><label style="position: relative;top:-15px; "> DATE </label></th>

				            <th colspan="2"><label> ASSISTANCE PROVIDED </label></th>

				            <th rowspan="2"><label style="position: relative;top:-15px; "> PROVIDER </label></th>

				            <th rowspan="2"><label style="position: relative;top:-15px; "> RELEASED BY </label></th>

				        </tr>

				        <tr>

				            <th >KIND </th>

				            <th> QUANTITY </th>


				        </tr>

				    </thead>

				    <tbody>
				    	
				    	@for($i = 1; $i <= 24; $i++)

							<tr>
					            <td height="60"></td>
					            <td height="60"></td>
					            <td height="60"></td>
					            <td height="60"></td>
					            <td height="60"></td>
					        </tr>

				        @endfor

				    </tbody>
					
				</table>

			</div>
			

@endsection