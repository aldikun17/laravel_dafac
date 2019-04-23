@include('web.includes.header.header')

<div class="row-fluid">

	<div class="col-md-8 col-md-offset-2" style="margin-top:10px;">

		<div class="row" style="background-color: #d11434">

			<div class="row" style="margin-top: 20px;">

				<div class="col-md-2">
				
					<img src="{{asset('web/img/city_taguig.png')}}" style="max-width: 150px;width: 85px;">

				</div>
				
				<div class="col-md-8">
					<center>
						<h1 style="font-family: tahoma;font-size: 35px;margin-top:15px;color:white">
						City Government of Taguig </h1>
					</center>
				</div>

				<div class="col-md-2">
				
					<img src="{{asset('web/img/dswd.png')}}" style="max-width: 150px;width: 85px;margin-left: 41px;">

				</div>

			</div>

			<div class="row">
				
				<div class="col-md-12 col-md-offset-0" style="margin-top: -20px;">
					
					<hr  style="background: black;">

				</div>

				<div>
					
					<center>

						<p style="margin-top: -20px;font-family: tahoma;font-size: 35px;color:white">

							<strong> City Social Welfare And Develepment Office </strong>

						</p>

					</center>

				</div>

			</div>

		</div>

		<div class="row" style="margin-top: 1px;">

			<center>

				<p style="font-family: tahoma;font-size: 38px;"> Disaster Assistance Family Access Card (DAFAC) </p>

			</center>
				
		</div>

		<div class="alert alert-danger alert-dismissible" id="dafac_poster" style="display: none">

			<button type="button" class="close" data-dismiss="alert" aria-label="Close">

				<span aria-hidden="true">&times;</span>

			</button>

		</div>

		<div>
			
			@yield('content')

		</div>

	</div>

</div>

<script type="text/javascript">
	
	$(document).ready(function(){

		$('#addNew_member').click(function(){

			var members = "<tr>"+

							"<td><input type=text name='member_name[]' class=form-control /></td>"+
							"<td><input type=text name='member_age[]' class=form-control style=width:50px; ></td>"+
							"<td><input type=text name='member_relation[]' class=form-control style=width: 100px;></td>"+
							"<td><input type=text name='member_sex[]' class=form-control style=width: 100px;></td>"+
							"<td><input type=text name='member_occupation[]' class=form-control style=width: 100px ></td>"+
							"<td><input type=text name='member_health[]' class=form-control style=width: 150px;></td>"+
							"<td><input type=text name='member_remarks[]' class=form-control style=width: 150px></td>";

			$('#parent_table').append(members);

		});

		$('#dafac_form').submit(function(e){

			var barangay 		= Input.get('barangay'),

				disaster 		= Input.get('disaster_id'),

				head_surname 	= Input.get('head_surname'),

				head_given 		= Input.get('head_given'),

				head_address 	= Input.get('head_address'),

				head_age 		= Input.get('head_age'),

				head_occupation = Input.get('head_occupation'),

				affiliated_name = Input.get('affiliated_name'),

				affiliated_age  = Input.get('affiliated_age'),

				affiliated_rel  = Input.get('affiliated_relation'),

				affiliated_gen  = Input.get('affiliated_gender'),

				affiliated_occ  = Input.get('affiliated_occupation'),

				affiliated_heal = Input.get('affiliated_health'),

				rent_residency  = Input.get('rent_residency'),

				affiliated_rem  = Input.get('affiliated_remarks'),

				dafac_poster    = Input.get('dafac_poster'),

				bool 			= true;

				bool = bool && univ_validate.required( barangay.value , barangay , 'Barangay' , dafac_poster);

				bool = bool && univ_validate.required( disaster.value , disaster , 'Disaster' , dafac_poster);

				bool = bool && univ_validate.required( head_surname.value , head_surname , 'Head Family Surname' , dafac_poster);

				bool = bool && univ_validate.required( head_given.value , head_given , 'Head Family Given Name' , dafac_poster);

				bool = bool && univ_validate.required( head_address.value , head_address , 'Address' , dafac_poster);

				bool = bool && univ_validate.required( head_age.value , head_age , 'Age' , dafac_poster);

				bool = bool && univ_validate.required( head_occupation.value , head_occupation , 'Head Family Occupation' , dafac_poster);

				bool = bool && univ_validate.required( affiliated_name.value , affiliated_name , 'Affiliated Name' , dafac_poster);

				bool = bool && univ_validate.required( affiliated_age.value , affiliated_age , 'Affiliated Age' , dafac_poster);

				bool = bool && univ_validate.required( affiliated_rel.value , affiliated_rel , 'Affiliated Relation' , dafac_poster);

				bool = bool && univ_validate.required( affiliated_gen.value , affiliated_gen , 'Affiliated Gender' , dafac_poster);

				bool = bool && univ_validate.required( affiliated_occ.value , affiliated_occ , 'Affiliated Occupation' , dafac_poster);

				bool = bool && univ_validate.required( affiliated_heal.value , affiliated_heal , 'Affiliated Health' , dafac_poster);

				bool = bool && univ_validate.required( affiliated_rem.value , affiliated_rem , 'Affiliated Remarks' , dafac_poster);


				if($('.residency:checked').val() == 'renter')
				{

					bool = bool && univ_validate.required( rent_residency.value , rent_residency , 'Rent Amount' , dafac_poster);

				}



				if(bool)
				{

					return true;

				}

			e.preventDefault();

		});

		$('.residency').change(function(){

			if($(this).val() == 'renter')
			{

				$('#rent_residency').show();

			}	else {

				$('#rent_residency').hide();

			}

		});

	});

</script>

@include('web.includes.footer.footer')