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
    <legend>30 aktuelle Bewertungen</legend>
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
            @if($bewertung['hervorgehoben'])
            <tr>
                <td class="hervorgehoben">{{ $bewertung['bewertungszeitpunkt']}}</td>
                <td class="hervorgehoben">{{$gericht['name']}}</td>
                <td class="hervorgehoben">{{$bewertung['sternebewertung']}}</td>
                <td class="hervorgehoben">{{$bewertung['bemerkung']}}</td>
                @if($benutzer['admin'])
                    <td class="hervorgehoben"><a href="/hervorheben?hervorhebenid={{$bewertung['id']}}" >Hervorhebung abwahlen</a></td>
                @endif
            </tr>
            @else
                <tr>
                    <td class="menulist">{{ $bewertung['bewertungszeitpunkt']}}</td>
                    <td class="menulist">{{$gericht['name']}}</td>
                    <td class="menulist">{{$bewertung['sternebewertung']}}</td>
                    <td class="menulist">{{$bewertung['bemerkung']}}</td>
                    @if($benutzer['admin'])
                        <td class="menulist"><a href="/hervorheben?hervorhebenid={{$bewertung['id']}}" >hervorheben</a></td>
                    @endif
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    <a href="/">Zurück</a>
</fieldset>
<footer>
    @yield('footer')
</footer>
</body>