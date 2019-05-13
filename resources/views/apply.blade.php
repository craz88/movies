<?php
//$name = \Session::get("name");
//$user_id = \Session::get("id");
//dd($user_id);
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

<input type="text" name="title">
<br>
<input type="submit" formaction="{{ url('/apply') }}" value="確定">
<br><br><br><br>
<a href="{{ url('/movie') }}">ashjs</a>
</form>
</body>
</html>