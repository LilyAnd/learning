<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="2">
  	<tr>
    	<th>Id</th>
    	<th>Username</th>
    	<th>Password</th>
    	<th>Name</th>
  	</tr>

  	<tr>


    @foreach($accounts as $val)
    <tr>
    <td>
		{{$val->id}}<br/>
	</td>	

	<td>
	{{$val->username}}<br/>
	</td>

	<td>
	{{$val->password}}<br/>
	</td>

	<td>
	{{$val->name}}<br/>
	@endforeach

</table> 


</body>
</html>