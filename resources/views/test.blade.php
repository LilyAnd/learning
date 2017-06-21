<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <table border="2">
  	<tr>
    	<th>Id</th>
    	<th>Name</th>
    	<th>Address</th>
    	<th>Gender</th>
  	</tr>

  	<tr>


    @foreach($students as $val)
    <tr>
    <td>
		{{$val->id}}<br/>
	</td>	

	<td>
	{{$val->name}}<br/>
	</td>

	<td>
	{{$val->address}}<br/>
	</td>

	<td>
	{{--$val->gender}}<br/>--}}

	@if($val->gender==0)
		Male
	@else
		Female
	@endif
	</td>
	</tr>
	@endforeach

</table> 

</body>
</html>


