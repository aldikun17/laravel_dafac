@extends('web.home')
@section('content')
<div class="col-md-12" style="padding: 20px;">
	
	<ul class="list list-inline">
		
		<li>
			
			<a href="{{Route('search/disaster')}}" class="btn btn-primary pull-right" style="margin-top:-20px;"> Search 

				<i class="fa fa-search"></i>

			</a>

		</li>

		<li class="pull-right">
			
			<a href="{{Route('disasters')}}" class="btn btn-primary" style="margin-top:-20px;"> Records 

				<i class="fa fa-file"></i>
				
			</a>

		</li>

	</ul>
	

	<hr>

</div>
<form action="{{Route('emergency_assistance')}}" method="POST" id="dafac_form">

			{{csrf_field()}}

		<div class="row">

			@if(Session('disaster_registered'))

	          	<div class="alert alert-success alert-dismissible" id="validate_poster" role="alert">
	  			
				  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">

						<span aria-hidden="true">&times;</span>

					</button>

					{{Session('disaster_registered')}}

				</div>

			@endif
			

			<hr>
			
		</div>

		<div class="row">

			<div class="col-md-9">
				
				<div class="form-group">
					
					<div class="col-md-3">
						
						<label> Barangay: </label>

					</div>

					<div class="col-md-9 form-group">
						
						<select name="barangay" class="form-control" id="barangay" required>
							
							<option></option>

							@foreach($barangay as $barangays)

								<option value="{{$barangays->id}}"> {{$barangays->barangay_name}} </option>

							@endforeach

						</select>

					</div>

				</div>

			</div>

			<div class="col-md-3">
				
				<div class="form-group">

						<div class="col-md-3">
							
							<label> Date: </label>

						</div>

						<div class="col-md-9 form-group">
							
							<input type="text" name="date_now" value="{{date('Y-m-d')}}" readonly class="form-control" required>

						</div>

				</div>
			
			</div>
		
		</div>

		<div class="row">

			<div class="col-md-8">

				<div class="form-group">

					<div class="col-md-4">
						
						<label> Evacuation Center: </label>

					</div>

					<div class="col-md-8 form-group" style="margin-left: -29px;">

						<select name="evacuation_center" class="form-control" id="evacuation_center" required >
							
							<option></option>
						
							@foreach($evacuation as $evacuations)

							<option value="{{$evacuations->id}}">{{$evacuations->name_facility}}</option>



							@endforeach


						</select>

						
					</div>

				</div>
				
			</div>

			<div class="col-md-4">

				<div class="form-group">

					<div class="col-md-2">
						
						<label class="label_master" style="margin-left: -50px;"> Disaster: </label>

					</div>

					<div class="col-md-10 form-group">
						
						<select name="disaster_id" class="form-control" id="disaster_id" required>

							<option></option>

							@foreach($disaster as $disasters)

								<option value="{{$disasters->id}}"> {{ucwords($disasters->disaster_type)}} </option>

							@endforeach
							
						</select>

					</div>
					
				</div>
				
			</div>
			
		</div>

		<legend> Head of Family </legend>

		<div class="row">
			
			<div class="col-md-4">

				<div class="form-group">

					<div class="col-md-3">
						
						<label> Surname: </label>

					</div>

					<div class="col-md-9 form-group">
						
						<input type="text" name="head_surname" id="head_surname" required class="form-control" style="margin-left: 10px;">

					</div>
					
				</div>
				
			</div>

			<div class="col-md-5" style="margin-left: -40px;">

				<div class="form-group">

					<div class="col-md-4">
						
						<label style="margin-left: 20px;"> Given: </label>

					</div>

					<div class="col-md-7 form-group">
						
						<input type="text" name="head_given" required class="form-control" id="head_given" style="width: 250px;margin-left:-25px;">

					</div>
					
				</div>
				
			</div>

			<div class="col-md-3">

				<div class="form-group">

					<div class="col-md-1">
						
						<label style="margin-left: -50px;"> MI: </label>

					</div>

					<div class="col-md-10 form-group">
						
						<input type="text" name="head_mi" required id="head_mi" class="form-control" style="margin-left: -45px;width: 250px;">

					</div>
					
				</div>
				
			</div>

		</div>

		<div class="row">

			<div class="col-md-12">

				<div class="col-md-2">

					<label> Address: </label>
					
				</div>

				<div class="col-md-10 form-group">
					
					<input type="text" name="head_address" required id="head_address" class="form-control">

				</div>
				
			</div>
			
		</div>

		<div class="row">

			<div class="col-md-3">
				
				<div class="form-group">
					
					<div class="col-md-2">
						
						<label> Age: </label>

					</div>

					<div class="col-md-10 form-group">
						
						<input type="text" name="head_age" required id="head_age" class="form-control" style="margin-left: 25px;">

					</div>


				</div>

			</div>

			<div class="col-md-6">

				<div class="form-group">
					
					<div class="col-md-3">
						
						<label> Occupation: </label>

					</div>

					<div class="col-md-9">
						
						<input type="text" name="head_occupation" required id="head_occupation" class="form-control">

					</div>

				</div>
				
			</div>

			<div class="col-md-3">
				
				<div class="form-group">

					<div class="col-md-3">
						 
						<label style="margin-left: -25px;"> Income: </label>

					</div>

					<div class="col-md-9">

						<input type="text" name="head_income" required class="form-control">
						
					</div>
					
				</div>

			</div>
			
		</div>

		<hr>

		<div class="row">

			<div class="col-md-12">

				<legend> Family Compound </legend>

				<table class="table table-striped table-bordered" id="parent_table">
					
					<thead>
						
						<tr>
							
							<th><center> Name </center></th>
							<th width="50px;"><center> Age  </center></th>

							<th width="100px;"><center> Relation  </center></th>

							<th width="60px;"><center> Sex  </center></th>

							<th width="100px;"><center> Occupation  </center></th>

							<th width="150px;"><center> Health  </center></th>

							<th width="150px;"><center> Remarks  </center></th>

						</tr>

					</thead>

					<tbody>
						
						<tr>
							
							<td><input type="text" name="family_name" required id="affiliated_name" class="form-control"></td>

							<td><input type="text" name="family_age" required id="affiliated_age" class="form-control" style="width: 50px;"></td>

							<td><input type="text" name="family_relation" required id="affiliated_relation" class="form-control" style="width: 100px;"></td>

							<td><input type="text" name="family_gender" required id="affiliated_gender" class="form-control" style="width: 60px;"></td>

							<td><input type="text" name="family_occupation" required id="affiliated_occupation" class="form-control" style="width: 100px;"></td>

							<td><input type="text" name="family_health" required id="affiliated_health" class="form-control" style="width: 150px;"></td>

							<td><input type="text" name="family_remarks" required id="affiliated_remarks" class="form-control" style="width: 150px;"></td>

						</tr>

					</tbody>

					<tfoot>
						
						<tr>
							
							<td colspan="7"><a id="addNew_member" class="btn btn-primary pull-right">Add New Member</a></td>

						</tr>

					</tfoot>

				</table>
				
			</div>


			<div class="col-md-12">

				<div class="col-md-3">
					
					<div style="border: 1px solid black;height: 150px;">
						

					</div>
					<center><label> Thumb Mark </label></center>

					<div style="border: 2px solid black; margin-top: 0px;margin-left: 240px;width: 300px;margin-top: -30px;">
						
					</div>
					<label style="margin-left: 300px;width: 300px;"> Signiture Over Printed Name </label>

				</div>

				<div class="col-md-4" style="height: 150px;">

					<div class="radio">
					  <label><input type="radio" name="residency" class="residency"required value="owner">Owner___________________</label>
					</div>
					<div class="radio">
					  <label><input type="radio" name="residency" class="residency" required value="sharer">Sharer___________________</label>
					</div>
					<div class="radio disabled">
					  <label><input type="radio" name="residency" class="residency" required value="renter"> Renter  </label>
					</div>

					<input type="text" name="rent" class="form-control" id="rent_residency" style="width:150px;margin-top:-35px;margin-left: 70px;display: none">
					

				</div>

				<div class="col-md-5" style="border: 1px solid black">
					
					<div>

						<label> Codes: </label>

						<br>

						<label> A - Elderly  </label> <label class="pull-right"> D - Pregnant Women </label><br>

						<label> B - PWD  </label> <label class="pull-right"> E - Lactating Women </label>

						<br>

						<label> C - Infant  </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label> F - Children </label>
						

					</div>

				</div>
				<div class="col-md-5" style="border: 1px solid black;padding-bottom: 10px;">

					<label> Housing Condition: </label><br>
					
					<label class="radio-inline"><input type="radio" required name="house_status" value="totally_damage">Totally Damage</label>
					<label class="radio-inline"><input type="radio" required name="house_status" value="partial_damage">Partial Damage</label>
					<label class="radio-inline"><input type="radio" required name="house_status" value="water_damage">Water Damage</label>

				</div>

				<div class="col-md-12" style="margin-top: 20px;padding-bottom: 50px;">
					
					<center><input type="submit" value="Submit" class="btn btn-primary"></center>

				</div>

			</div>

			</form>

@endsection