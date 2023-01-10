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
    <form method="post" action="/">
        <input type="hidden" name="submitted" value="1">
        <div class="form">
            <label for="bemerkung">Bemerkung:</label> <br>
            <input type="text" name="bemerkung" id="bemerkung" required>
        </div>
        <div class="form">
            <label for="sterne">Sterne-Bewertung:</label> <br>
            <select id="sterne" name="sterne">
                <option value="sehrgut">Sehr Gut</option>
                <option value="gut">Gut</option>
                <option value="schlecht">Schlecht</option>
                <option value="sehrschlecht">Sehr Schlecht</option>
            </select>
        </div>
        <br>
        <button type="submit" name="submit" value="submit" id="submit">Bewertung abgeben</button>
    </form>
</main>
<footer>@yield('footer')</footer>
</body>
</html>
