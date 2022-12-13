<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Ihre E-Mensa</title>
    @yield('cssextra')
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
<div>@yield('navi')</div>
</body>
<footer>
    <ul class="foot">
        <li class="flist">&copy; E-Mensa GmbH</li>
        <li class="flist">Jericho, Fachrial</li>
        <li><a>Impressum</a></li>
    </ul>
</footer>
</html>