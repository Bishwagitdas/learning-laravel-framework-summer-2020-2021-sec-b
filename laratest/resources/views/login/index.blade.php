<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>

	<form method="post">
		<table>
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
               <td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
				
			</tr>
		</table>
	
	</form>
       {{session('msg')}}
</body>
</html