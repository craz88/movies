<?php
//$name = \Session::get("name");
//$user_id = \Session::get("id");

//dd($applys);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
 		{{ csrf_field() }}
 		<input type="hidden" name="movie" value="{{ $id }}">
<br>
<input type="submit" formaction="{{ url('/addd') }}" value="確定">
<br><br><br><br>
<a href="{{ url('/movie') }}">ashjs</a>
</form>
</body>
</html>