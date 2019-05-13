<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form method="post" action="">
			{{ csrf_field() }}
 <input type="text" name="name">
 <input type="submit" formaction="{{ url('/movie') }}" value="確定">
 <br><br><br>
 <a href="{{ url('/Q&A') }}" class="title" title="asg">ashjs</a>
</form>
</body>
</html>