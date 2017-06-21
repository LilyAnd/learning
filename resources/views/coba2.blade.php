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
    	<th>Gender</th>
    	<th>Address</th>
  	</tr>

  	<tr>


    @foreach($chefs as $val)
    <tr>
    <td>
		{{$val->id}}<br/>
	</td>	

	<td>
	{{$val->name}}<br/>
	</td>

	<td>
	{{$val->gender}}<br/>
	</td>

	<td>
	{{$val->address}}<br/>
	@endforeach

</table> 


</body>
</html>