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
<fieldset>
    <legend>Meine Bewertungen</legend>
    <table id="menu">
        <tbody>
        <tr>
            <th class="menulist">Datum</th>
            <th class="menulist">Gericht Name</th>
            <th class="menulist">Sterne-Bewertung</th>
            <th class="menulist">Bemerkung</th>
        </tr>

        @foreach($tabelle as $bewertung)
                <?php
                $gericht = gerichtvonid($bewertung['gericht_id'])
                ?>
            <tr>
                <td class="menulist">{{ $bewertung['bewertungszeitpunkt']}}</td>
                <td class="menulist">{{$gericht['name']}}</td>
                <td class="menulist">{{$bewertung['sternebewertung']}}</td>
                <td class="menulist">{{$bewertung['bemerkung']}}</td>
                <td class="menulist"><a href="/bewertungloeschen?bid={{$bewertung['id']}}" onclick="return confirm('Are you sure you want to delete this item?');">Bewertung loeschen</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="/">Zurück</a>
</fieldset>
<footer>
    @yield('footer')
</footer>
</body>