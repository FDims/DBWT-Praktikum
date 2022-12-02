<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Ihre E-Mensa</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <h1 class="head">
        E-Mensa
    </h1>
    <ul class="headlist head">
        <li><a href="#ankundigung">Ankündigung</a></li>
        <li><a href="#speisen">Speisen</a></li>
        <li><a href="#zzahlen">Zahlen</a></li>
        <li><a href="#kontakt">Kontak</a></li>
        <li><a href="#unswichtig">Wichtig für uns</a></li>
    </ul>
</header>
<div>@yield('content')</div>
</body>
<footer>
    <ul class="foot">
        <li class="flist">&copy; E-Mensa GmbH</li>
        <li class="flist">Jericho, Fachrial</li>
        <li><a>Impressum</a></li>
    </ul>
</footer>
</html>