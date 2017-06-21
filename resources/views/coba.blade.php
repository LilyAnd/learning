<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Tabel Accounts</h1>

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

<h1>Tabel Chefs</h1>

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
	{{--{{$val->gender}}<br/>--}}
	@if($val->gender==0)
		Male
	@elseif($val->gender==1)
		Female
	@else
		Your input wrong!
	@endif
	</td>

	<td>
	{{$val->address}}<br/>
	@endforeach

</table> 

<h1>Tabel Books</h1>
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

<h1>Tabel Laptops</h1>

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

<h1>Tabel Phones</h1>

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