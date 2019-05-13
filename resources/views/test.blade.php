<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<form action="" method="post">
	{{ csrf_field() }}
   @isset($msg)
	{{ $msg }}
	@endisset
	<br>
	name:<input type="text" name="name">
	<br>
	mail:<input type="text" name="mail">
	<br>
	age:<input type="text" name="age">
	<br>
	<input type="submit" formaction="{{ url('/test5') }}">
</form>
</body>
</html>