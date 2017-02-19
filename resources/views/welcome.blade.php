<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cv Delon Frédéric</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

<div class="headerCv"><img src="{{URL::asset('Fred3.jpg')}}" alt="monimage" class="ui medium circular image floated"><h1 id="titleName" class="ui header centered floated">Delon Frédéric</h1></div>

	<div class="ui five item menu">
		<a class="item" href="/experience">Expériences</a>
		<a class="item" href="/formation">Formation</a>
		<a class="item" href="/competence">Compétences</a>
		<a class="item" href="/loisir">Loisirs</a>
		<a class="item" href="/contact">Contacts</a>
	</div>
@yield('content')


</body>
</html>