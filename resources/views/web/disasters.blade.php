@extends('web.home')
@section('content')

<div class="well" style="margin-left: -15px;width: 1025px;margin-top: 25px;">
		
	<form action="{{url('disasters/reports')}}" method="GET" autocomplete="off" >

		<div class="row">

			<div class="col-md-3">

				<select name="disaster_id" class="form-control" required>

					<option></option>

					@foreach($evacuation as $evacuations)

						<option value="{{$evacuations->id}}"> {{ $evacuations->name_facility }} </option>

					@endforeach

				</select>
				
			</div>

			<div class="col-md-4">
				
				<input type="text" name="start_date" class="form-control" id="end_report" data-date-format='yyyy-mm-dd'>

			</div>

			<div class="col-md-4">
				
				<input type="text" name="end_date" class="form-control" id="start_report" data-date-format='yyyy-mm-dd'>

			</div>

			<div class="col-md-1" style="margin-left:-18px;">
				
				<input type="submit" value="Generate" class="btn btn-primary">

			</div>

		</div>
		

	</form>

	<hr>

		<table class="table table-striped table-bordered table-hovered"  id="record_disasters" >

			<thead>
				
				<tr>
					
					<th> Name </th>

					<th> Address </th>

					<th> Disaster Type </th>

					<th> Age </th>

					<th> Occupation </th>

					<th> Income </th>

					<th> Data </th>

				</tr>

			</thead>

			<tbody>
				
				@foreach($emergency as $emergencies)

					<tr>
						<td> <a data-toggle="modal" data-target="#myModal_{{ $emergencies->family_head->head_id }}">

							{{ $emergencies->family_head->last_name.', '.$emergencies->family_head->first_name.' '.$emergencies->family_head->middle_name }} </a> </td>

						<td> {{ $emergencies->family_head->address }} </td>

						<td> {{ucwords($emergencies->disaster->disaster_type) }}  </td>

						<td> {{ $emergencies->family_head->age }} </td>

						<td> {{ $emergencies->family_head->occupation }} </td>

						<td> {{ $emergencies->family_head->monly_income }} </td>

						<td> <a href="{{ Route('disaster/head',$emergencies->head_id) }}" class="btn btn-primary btn-xs"> <i class="fa fa-file"></i> </a> </td>


					</tr>

					<div id="myModal_{{ $emergencies->family_head->head_id }}" class="modal fade" role="dialog">
					  <div class="modal-dialog  modal-lg">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title"> Family ID {{ $emergencies->family_head->head_id }} </h4>
					      </div>
					      <div class="modal-body">
					        
					      	<div class="form-group">

					      		<legend> Head Family </legend>

					      		<div class="well" style="width:50%">
					      			
					      			<ul class="list-unstyled">

						      			<li style="margin-bottom: 10px;"> 

						      				<label> Name:   </label> 

						      				<p class="pull-right"> {{ $emergencies->family_head->name }} </p>

						      			</li>

						      			<li style="margin-bottom: 10px;"> 

						      				<label> Address: </label>

						      				<p class="pull-right"> {{ $emergencies->family_head->address }} </p>

						      			</li>

						      			<li style="margin-bottom: 10px;"> 

						      				<label> Disaster Type: </label>

						      				<p class="pull-right"> {{ucwords($emergencies->disaster->disaster_type) }} </p>

						      			</li>
						      			
						      		</ul>

					      		</div>

					      		<div class="pull-right well" style="width: 50%;margin-top: -165px;">

					      			<ul class="list-unstyled">

					      				<li  style="margin-bottom: 10px;"> <label> Residency:  </label> <p class="pull-right"> {{ $emergencies->rent_price }} </p> </li>

					      				<li style="margin-bottom: 10px;"> <label> Condition:  </label> <p class="pull-right"> {{ $emergencies->house_condition }} </p> </li>

					      				<li style="margin-bottom: 10px;"> 

						      				<label> Disaster Type: </label>

						      				<p class="pull-right"> {{ucwords($emergencies->disaster->disaster_type) }} </p>

						      			</li>
					      				
					      			</ul>
					      			
					      		</div>
					      	
					      	</div>

					      	<hr>

					      	<legend> Family affiliated </legend>

					      	@foreach($emergencies->family_head->family_affiliated as $affiliated)

					      		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingOne_{{ $affiliated->id }}">
								      <h4 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_{{ $affiliated->id }}" aria-expanded="true" aria-controls="collapseOne">
								          {{ $affiliated->name }}
								        </a> 
								      </h4>
								    </div>
								    <div id="collapseOne_{{ $affiliated->id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_{{ $affiliated->id }}">
								      <div class="panel-body">

								      	<ul class="list-unstyled">
								      		
								      		<li> 

								      			<label style="margin-bottom: 10px;"> Age:  </label>

								      			<p class="pull-right"> {{ $affiliated->age }} </p>

								      		</li>

								      		<li> 

								      			<label style="margin-bottom: 10px;"> Relation:  </label>
								      			
								      			<p class="pull-right"> {{ $affiliated->relation }} </p>

								      		</li>

								      		<li> 

								      			<label style="margin-bottom: 10px;"> Sex:  </label>
								      			
								      			<p class="pull-right"> {{ $affiliated->sex }} </p>

								      		</li>

								      		<li> 

								      			<label style="margin-bottom: 10px;"> Occupation:  </label>
								      			
								      			<p class="pull-right"> {{ $affiliated->occupation }} </p>

								      		</li>

								      		<li> 

								      			<label style="margin-bottom: 10px;"> Health Condition:  </label>
								      			
								      			<p class="pull-right"> {{ $affiliated->health }} </p>

								      		</li>

								      		<li> 

								      			<label style="margin-bottom: 10px;"> Remarks:  </label>
								      			
								      			<p class="pull-right"> {{ $affiliated->remarks }} </p>

								      		</li>

								      	</ul>
								        
								      </div>
								    </div>
								  </div>
								</div>

					      	@endforeach

					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>

					  </div>
					</div>


				@endforeach


			</tbody>
			
		</table>

</div>

<script type="text/javascript">
	
$(document).ready(function(){

	$('#record_disasters').DataTable();

	$('#start_report').datepicker();

	$('#end_report').datepicker();

	$('#get_reports').submit(function(e){


		$.ajax({

			type: "GET",

			url : "{{url('/disasters/reports/')}}/"+ $('#start_report').val() + '/' + $('#end_report').val(),

			success: function(response){

				console.log('what');

			}

		});

		e.preventDefault();

	});

});

</script>

@endsection