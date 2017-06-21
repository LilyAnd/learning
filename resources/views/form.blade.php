<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="member_insert" method="post">
	{{csrf_field()}}
		 ID: <br/><input type="text" name="id" placeholder="ID"></input><br/>
		 Name: <br/><input type="text" name="name" placeholder="Name"></input><br/>
		 Address:<br/><input type="text" name="address" placeholder="Address"></input><br/>
		 Date of Bithday: <br/><input type="text" name="dob" placeholder="Date of Birthday"></input><br/>
		 Gender: <br/><input type="text" name="gender" placeholder="Gender"></input><br/>
		Email: <br/><input type="text" name="email" placeholder="Email"></input><br/>
		City: <br/><input type="text" name="city" placeholder="City"></input><br/>
		Country: <br/><input type="text" name="country" placeholder="Country"></input><br/>
		 <input type="submit" name="submit" value="Submit"></input>
	</form>

</body>
</html>