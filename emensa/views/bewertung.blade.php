@include('layout.emensa')
        <!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bewertungsformular</title>
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
    <a>{{$data['name']}}</a>
    <br>
    <?php
    $bildname=$data['bildname']!=null?$data['bildname']:"00_image_missing.jpg";
    $dir = "./img/gerichte/".$bildname;
    if(!file_exists($dir)){
        $dir ="./img/gerichte/00_image_missing.jpg";
    }
    ?>
    <img src={{$dir}} class="foodimg" alt="{{$data['name']}}">
    <form method="post" action ="/submitbewertung">
        <input type="hidden" name="submittedbewertung" value="1">
        <input type="hidden" name="gerichtid" value="{{$_GET['gerichtid']}}">
        <div class="form">
            <label for="bemerkung">Bemerkung:</label> <br>
            <input type="text" name="bemerkung" id="bemerkung" minlength=5 required>
        </div>
        <div class="form">
            <label for="sterne">Sterne-Bewertung:</label> <br>
            <select id="sterne" name="sterne">
                <option value="Sehr Gut">Sehr Gut</option>
                <option value="Gut">Gut</option>
                <option value="Schlecht">Schlecht</option>
                <option value="Sehr Schlecht">Sehr Schlecht</option>
            </select>
        </div>
        <br>
        <button type="submit" name="submitbewertung" value="submitbewertung" id="submitbewertung">Bewertung abgeben</button>
    </form>
</main>
<footer>@yield('footer')</footer>
</body>
</html>
