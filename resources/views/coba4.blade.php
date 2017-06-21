<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="2">
  	<tr>
    	<th>Id</th>
    	<th>Merk</th>
    	<th>Type</th>
    	<th>Price</th>
  	</tr>

  	<tr>


    @foreach($laptops as $val)
    <tr>
    <td>
		{{$val->id}}<br/>
	</td>	

	<td>
	{{$val->merk}}<br/>
	</td>

	<td>
	{{$val->type}}<br/>
	</td>

	<td>
	{{$val->price}}<br/>
	@endforeach

</table> 


</body>
</html>