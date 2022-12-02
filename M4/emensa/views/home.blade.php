@extends("layout")

<<<<<<< HEAD
@section("header")
    <nav>
        <a href="" id="logo"><h1 class="head">
                E-Mensa
            </h1></a>
        <ul class="headlist head">
            <li><a href="#ankundigung">Ankündigung</a></li>
            <li><a href="#speisen">Speisen</a></li>
            <li><a href="#zzahlen">Zahlen</a></li>
            <li><a href="#kontakt">Kontak</a></li>
            <li><a href="#unswichtig">Wichtig für uns</a></li>
=======
@section("content")
    <header class="mt-5">
        <h1>Hauptseite E-Mensa</h1>
        <img src="./img/test.jpg"
             alt="Testbild von https://cdn.pixabay.com/photo/2014/06/03/19/38/road-sign-361513_960_720.jpg">
    </header>
    <nav class="mt-5">
        <strong>Navigation</strong>
        <ul>
            <li><a href="/demo/demo">Demo</a></li>
            <li><a href="/demo/dbconnect">Datenbank: Gerichte</a></li>
            <li><a href="/examples/m4_7a_queryparameter">m4_7a_queryparameter</a></li>
            <li><a href="/examples/m4_7b_kategorie">m4_7b_kategorie</a></li>
            <li><a href="/examples/m4_7c_gerichte">m4_7c_gerichte</a></li>
            <li><a href="/examples/m4_7d_layout">m4_7d_layout</a></li>
        </ul>
        <ul>
            <li><a href="/debug"><code class="language-php">phpinfo();</code></a></li>
>>>>>>> 2e79b5acc57cdc8ea0d00a7d18c1483cdb2f50fa
        </ul>
    </nav>
@endsection

@section("content")
    <main>
    <img src="./img/emensa.jpg" alt="Mensa Photo" id="Mensaphoto">


    <h2 id="ankundigung">Bald gibt es Essen auch Online ;)</h2>
    <fieldset class="desc"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
            accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
            est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
            voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
            no sea takimata sanctus est Lorem ipsum dolor sit amet.</p></fieldset>


    <h2 id="speisen">Köstlichkeiten, die Sie erwarten</h2>
    <table id="menu">
        <tbody>
        <tr>

            <th class="menulist">Gerichte</th>
            <th class="menulist">Preis intern</th>
            <th class="menulist">Preis extern</th>
        </tr>
        @foreach($gerichte as $gericht)
            <tr>
                <td>{{ utf8_encode($gericht['name']) }}</td>
                <td>{{$gericht['peris_intern']}}</td>
                <td>{{$gericht['preis_extern']}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
        <h2 id="unswichtig"> Das ist uns wichtig</h2>
        <ul class="wichtig">
            <li>Beste frische saisonale Zutaten</li>
            <li>Ausgewogene abwechslungsreiche Gerichte</li>
            <li>Sauberkeit</li>
        </ul>


        <h2 class="closing">Wir freuen uns auf Ihren Besuch</h2>
    </main>
@endsection

@section("footer")
    <footer>
    <ul class="foot">
        <li class="flist">&copy; E-Mensa GmbH</li>
        <li class="flist">(Ihre Namen hier)</li>
        <li><a>Impressum</a></li>
    </ul>
    </footer>
@endsection

@section("cssextra")
    <link rel="stylesheet" href="/css/stylesheetnew.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&display=swap" rel="stylesheet">
@endsection

@section("jsextra")
    <script src="/js/highlight.min.js"></script><script>hljs.highlightAll();</script>
@endsection