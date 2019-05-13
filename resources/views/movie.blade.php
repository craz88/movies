<?php
use App\Movie;
$applys = Movie::get();
$user_id = \Session::get("id");
//dd($applys->toArray());
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form method="post" action="">
 		{{ csrf_field() }}
 		<a href="history/{{ $user_id }}">{{ $user_id }}</a>
 		<a href="user/history">検索履歴</a>
<br><br>
@isset($applys)
@forelse($applys as $apply)

<a href="id/{{ $apply->movie_id }}/{{ $apply->title }}">{{ $apply->title }}</a>
<br>
@empty
ないやんけ
@endforelse
@endisset

<br>
<a href="{{ url('/apply') }}">投稿</a>
</form>
</body>
</html>