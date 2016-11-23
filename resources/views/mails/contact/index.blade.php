<!DOCTYPE html>
<html>
<head>
	<title>Contactformulier cuipers.be</title>
	<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
	body{
		font-family:'Raleway';
	}
	li{
		list-style-type:none;
		padding:10px;
	}
</style>
</head>
<body>

	<h1>Contactformulier</h1>
	<ul>
		<li><strong>Naam:</strong> {{ $data->naam }}</li>
		<li><strong>Adres:</strong> {{ $data->adres }}</li>
		<li><strong>Gemeente:</strong> {{ $data->gemeente }}</li>
		<li><strong>Telefoon/GSM:</strong> {{ $data->telefoon }}</li>
		<li><strong>Email:</strong> {{ $data->email }}</li>
		<li><strong>Bericht:</strong> {{ $data->bericht }}</li>
	</ul>
</body>
</html>