<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="2">
  	<tr>
    	<th>Id</th>
    	<th>Title</th>
    	<th>Author</th>
    	<th>Price</th>
  	</tr>

  	<tr>


    @foreach($books as $val)
    <tr>
    <td>
		{{$val->id}}<br/>
	</td>	

	<td>
	{{$val->title}}<br/>
	</td>

	<td>
	{{$val->author}}<br/>
	</td>

	<td>
	{{$val->price}}<br/>
	@endforeach

</table> 


</body>
</html>