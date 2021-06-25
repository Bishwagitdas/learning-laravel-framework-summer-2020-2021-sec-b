<!DOCTYPE html>
<html>
<head>
	<title>Edit User List</title>
</head>
<body>

	<form action="/user/edit" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname" value="{{$user->uname}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{$user->password}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="{{$user->email}}"></td>
			</tr>
			<!-- <tr>
				<td>Type</td>
				<td><input type="text" name="type"></td>
			</tr> -->
			<tr>
               <td></td>
				<td><input type="submit" name="submit" value="Update"></td>
				
			</tr>
		</table>
	
	</form>
</body>
</html