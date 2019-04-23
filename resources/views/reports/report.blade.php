<html>

	<title> Disaster Assistance Family Access Card </title>

<body>

	<table border="2" style="text-align: center;">

		<thead>

			<tr>

				<th width="110"> Head ID</th>

				<th width="140"> Head Of Family </th>

				<th width="215"> Address </th>

				<th> Disaster </th>

				<th> Age </th>

				<th> Occupation </th>

				<th> Income </th>

				<th> Residency </th>

				<th> House Condition </th>

			</tr>

		</thead>

		<tbody>

			@foreach($emergency as $emergencies)

				<tr>

					<td> {{ $emergencies->family_head->head_id  }} </td>

					<td> {{ $emergencies->family_head->last_name.', '.$emergencies->family_head->first_name.' '.$emergencies->family_head->middle_name  }} </td>

					<td> {{ $emergencies->family_head->address }} </td>

					<td> {{ucwords($emergencies->disaster->disaster_type) }} </td>

					<td> {{ $emergencies->family_head->age }} </td>

					<td> {{ $emergencies->family_head->occupation }} </td>

					<td> {{ $emergencies->family_head->monly_income }} </td>

					<td> {{ $emergencies->rent_price }} </td>

					<td> {{ $emergencies->house_condition }} </td>

				</tr>

			@endforeach

		</tbody>

	</table>


</body>
</html>