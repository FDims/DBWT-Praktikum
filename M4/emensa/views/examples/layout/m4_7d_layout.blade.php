<!DOCTYPE html>
<html lang="de">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>@yield('title')</title>
</head>
<body>
@section('header')
<div id="header">
    Nichts
</div>
@show
@section('main')
<div>
    <h3>Dies ist die erste Seite und das ist die Main Section</h3>
</div>
@show
@section('footer')
<div>
    <h4>Footerbereich</h4>
</div>
@show
</body>
</html>
