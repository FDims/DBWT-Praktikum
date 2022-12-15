
@section('title')
    E-Mensa
@endsection
@section('header')
    <div class="head">
    <h1>
        E-Mensa
    </h1>
    </div>
    <div class="head">
    <ul id="headlist">
        <li><a href="#ankundigung">Ankündigung</a></li>
        <li><a href="#speisen">Speisen</a></li>
        <li><a href="#zzahlen">Zahlen</a></li>
        <li><a href="#kontakt">Kontak</a></li>
        <li><a href="#unswichtig">Wichtig für uns</a></li>
    </ul>
    </div>
@endsection

@section('content')

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
            <th class="menulist">Bild</th>
            <th class="menulist">Gerichte</th>
            <th class="menulist">Preis intern</th>
            <th class="menulist">Preis extern</th>
        </tr>

        @foreach($gerichte as $gericht)
            <tr>
                    <?php
                    $bildname=$gericht['bildname']!=null?$gericht['bildname']:"00_image_missing.jpg";
                    ?>
                <td class="menulist"><img src="./img/gerichte/{{$bildname}}" class="foodimg" alt="{{$gericht['bildname']}}"></td>
                <td class="menulist">{{ $gericht['name']}}</td>
                <td class="menulist">{{$gericht['preis_intern']}}</td>
                <td class="menulist">{{$gericht['preis_extern']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@section('navi')
    <nav class="mt-5">
        <strong>Navigation</strong>
        <ul>
            <li><a href="/demo/demo">Demo</a></li>
            <li><a href="/demo/dbconnect">Datenbank: Gerichte</a></li>
            <li><a href="/examples/m4_7a_queryparameter">m4_7a_queryparameter</a></li>
            <li><a href="/examples/m4_7b_kategorie">m4_7b_kategorie</a></li>
            <li><a href="/examples/m4_7c_gerichte">m4_7c_gerichte</a></li>
            <li><a href="/examples/m4_7d_layout">m4_7d_layout</a></li>
            <li><a href="/home">Alte Home-Seite</a></li>
        </ul>
        <ul>
            <li><a href="/debug"><code class="language-php">phpinfo();</code></a></li>
        </ul>
    </nav>
@endsection
@section('cssextra')
    <link rel="stylesheet" href="/css/stylesheetnew.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&display=swap" rel="stylesheet">
@endsection
@section('footer')
    <ul class="foot">
        <li class="flist">&copy; E-Mensa GmbH</li>
        <li class="flist">Jericho, Fachrial</li>
        <li><a>Impressum</a></li>
    </ul>
@endsection