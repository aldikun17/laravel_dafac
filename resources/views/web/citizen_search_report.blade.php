<html>

	<title> Disaster Assistance Family Access Card </title>

<body>

	<div style="margin-bottom: 20px;">
		
		<legend><strong> Results ({{$age->count('id')}}) </strong></legend>

	</div>		


	<table border="2" style="text-align: center;" style="margin-top: 50px">

			<tr>

				<th width="350"> Family Head</th>

				<th width="350"> Name </th>

				<th width="100"> Age </th>

				<th width="100"> Relation </th>

				<th width="100"> Sex </th>

				<th width="100"> Occupation </th>


			</tr>

		</thead>

		<tbody>

			@foreach($age as $family)
				
					<tr>
						
						<td>
							{{ $family::find($family->id)->family_head->last_name.', '.$family::find($family->id)->family_head->first_name.' '.$family::find($family->id)->family_head->middle_name
							}}
						</td>

						<td>
							
							{{ $family->name }}

						</td>

						<td>
							
							{{ $family->age }}

						</td>

						<td>
							
							{{ $family->relation }}

						</td>

						<td>
							
							{{ $family->sex }}

						</td>

						<td>
							
							{{ $family->occupation }}

						</td>

					</tr>

				@endforeach
			

		</tbody>

	</table>

</body>

</html>
