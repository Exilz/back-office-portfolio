<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Contact Portfolio</h1>
		<p>De : {{$message->author}} | {{$message->email}}</p>
		<p>{{$message->message}}</p>
	</body>
</html>
