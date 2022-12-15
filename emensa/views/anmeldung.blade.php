@include('layout.emensa')
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Ihre E-Mensa</title>
    @yield('cssextra')
</head>
<body>
<header>
    @yield('header')
</header>
<a>{{$_SESSION['anmeldung_message']}}</a>
<fieldset>
    <legend>Anmelden</legend>
<form method="POST" action="/anmeldung_verifizieren">
    <label class="cred" for="email">E-Mail:</label>
    <input class="cred" type="email" id="email" name="email" placeholder="E-Mail">
    <br>
    <label class="cred" for="password">Passwort:</label>
    <input class="cred" type="password" id="password" name="password">
    <br>
    <input id="submit" type="submit" name="submit" value="submit">
</form>
</fieldset>
<footer>
    @yield('footer')
</footer>
</body>
