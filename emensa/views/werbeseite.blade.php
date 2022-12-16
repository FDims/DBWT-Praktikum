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
    <div class="head anmelden">
    @if(isset($_SESSION['anmeldung_erfolgreich']))
        <h4>Hallo,{{$_SESSION['email']}}</h4>
        <br>
        <a href="/abmelden">abmelden</a>
    @else
        <a href="/anmeldung">anmelden!</a>
    @endif
    </div>
</header>
<main>@yield('content')</main>
<footer>@yield('footer')</footer>
</body>
</html>