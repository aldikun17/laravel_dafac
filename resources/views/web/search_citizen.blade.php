@extends('web.home')
@section('content')

<div>

	<hr>

	<form action="{{route('search/disaster')}}" method="GET">

		<div class="col-md-11">
			
			<select name="age" class="form-control">

				<option></option>

				<option value="infant"> Infant </option>

				<option value="child">  Child </option>

				<option value="senior"> Senior </option>
				
			</select>

		</div>

		<div class="col-md-1">
			
			<input type="submit" class="btn btn-primary" value="Search">

		</div>

		

	</form>

</div>

<div>

	<hr>
	@if(empty($age))

	<div class="col-md-12" style="margin-top: 20px;width: 1015px;">
		
		<div class="alert alert-danger">
			
			<label> <strong> Data not Found </strong> </label>

		</div>

		

	</div>

	@else

	<div class="col-md-12 well" style="margin-top: 20px;">

		<legend> Results ({{$age->count('id')}}) </legend>

		<table class="table table-bordered table-striped" id="search_table">
			
			<thead>
				
				<tr>
					
					<th> Family Head </th>

					<th> Name </th>

					<th> Age </th>

					<th> Relation </th>

					<th> Sex </th>

					<th> occupation </th>

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

				<tfoot>
					
					<tr>
						
						<td colspan="6">
							
							<a href="{{ Route('citizen_search',$family->age) }}" class="btn btn-primary pull-right"> Reports </a>

						</td>

					</tr>

				</tfoot>


			</tbody>

		</table>
		
	</div>

	@endif



</div>

<script type="text/javascript">
	
	$(document).ready(function(){

		$('#search_table').dataTable();

	});

</script>

@endsection