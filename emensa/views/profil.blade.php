@include('layout.emensa')
        <!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Ihre Profil</title>
    @yield('cssextra')
</head>
<body>
<header>
    @yield('header')
    <div class="head anmelden">
            <h4>Angemeldet als <a href="/profil">{{$_SESSION['email']}}</a></h4>
    </div>
</header>
<main>
    <fieldset>
        <legend>Konto: {{$list['name']}}</legend>
        <p>email: {{$list['email']}}</p>
        <p>admin: {{$list['admin']}}</p>
        <p>letzte Anmeldung: {{$list['letzteanmeldungen']}}</p>
    </fieldset>
</main>
<footer>@yield('footer')</footer>
</body>
</html>
