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
    	<th>Date of Birthday</th>
    	<th>Gender</th>
    	<th>Email</th>
    	<th>City</th>
    	<th>Country</th>
    	<!-- <th>Action</th> -->
    	 
  	</tr>

  	<tr>


    @foreach($members as $val)
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
		{{$val->dob}}<br/>
	</td>	
 
	<td>
	@if($val->gender==0)
		Male
	@else
		Female
	@endif

	</td>

	 <td>
	{{$val->email}}<br/>
	</td>

	<td>
		{{$val->city}}<br/>
	</td>	

	<td>
	{{$val->country}}<br/>
	</td> 

	<!-- <td><a href="test6_detail/$id">View</a></td> -->

	@endforeach



</table> 


</body>
</html>