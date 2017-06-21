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
    	<th>Color</th>
    	<th>Type</th>
  	</tr>

  	<tr>


    @foreach($phones as $val)
    <tr>
    <td>
		{{$val->id}}<br/>
	</td>	

	<td>
	{{$val->merk}}<br/>
	</td>

	<td>
	{{--{{$val->color}}<br/>--}}
	@if($val->color=='BE')
		Blue
	@elseif($val->color=='W')
		White
	@else
		Plain
	@endif
	</td>

	<td>
	{{$val->type}}<br/>
	@endforeach

</table> 


</body>
</html>