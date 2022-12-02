@extends('layout.emensa')
@section('title')
    E-Mensa
@endsection
@section('content')
    <div>
        <img src="csm_mensenbistroskaffeebars_5bfbc30139.jpg" alt="Mensa Photo" id="Mensaphoto">
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
                <thead>
                <th>Gericht</th>
                <th>Preis intern</th>
                <th>Preis extern</th>
                <th>Allergen</th>
                </thead>
                <tbody>
                @foreach($gericht as $key)
                    <tr>
                        <td>{{$key['name']}}</td>
                        <td>{{number_format($key['preis_intern'],2)}}</td>
                        <td>{{number_format($key['preis_extern'],2)}}</td>
                        @if(isset($key['code']))
                            <td>{{$key['code']}}</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
            <h3>Folgende Allergencodes enthalten:</h3>
            <table>
                <thead>
                <tr>
                    <td>Code</td>
                    <td>Allergen</td>
                </tr>
                </thead>
                <tbody>
                @foreach($allergen as $key)
                    <tr>
                        <td>{{$key['code']}}</td>
                        <td>{{$key['name']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection