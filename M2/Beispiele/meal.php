<?php
/**
 * Praktikum DBWT. Autoren:
 * Vorname1, Nachname1, Matrikelnummer1
 * Vorname2, Nachname2, Matrikelnummer2
 */
const GET_PARAM_MIN_STARS = 'search_min_stars';
const GET_PARAM_SEARCH_TEXT = 'search_text';
const GET_PARAM_SHOW_DESCRIPTION = 'show_description';
/**
 * List of all allergens.
 */
$allergens = [
    11 => 'Gluten',
    12 => 'Krebstiere',
    13 => 'Eier',
    14 => 'Fisch',
    17 => 'Milch'
];

$meal = [
    'name' => 'Süßkartoffeltaschen mit Frischkäse und Kräutern gefüllt',
    'description' => 'Die Süßkartoffeln werden vorsichtig aufgeschnitten und der Frischkäse eingefüllt.',
    'price_intern' => 2.90,
    'price_extern' => 3.90,
    'allergens' => [11, 13],
    'amount' => 42             // Number of available meals
];

$ratings = [
    [   'text' => 'Die Kartoffel ist einfach klasse. Nur die Fischstäbchen schmecken nach Käse. ',
        'author' => 'Ute U.',
        'stars' => 2 ],
    [   'text' => 'Sehr gut. Immer wieder gerne',
        'author' => 'Gustav G.',
        'stars' => 4 ],
    [   'text' => 'Der Klassiker für den Wochenstart. Frisch wie immer',
        'author' => 'Renate R.',
        'stars' => 4 ],
    [   'text' => 'Kartoffel ist gut. Das Grüne ist mir suspekt.',
        'author' => 'Marta M.',
        'stars' => 3 ]
];
$de = [
        'Gericht'=>'Gericht: ',
        'Süßkartoffeltaschen mit Frischkäse und Kräutern gefüllt'=>'Süßkartoffeltaschen mit Frischkäse und Kräutern gefüllt',
        'Die Süßkartoffeln werden vorsichtig aufgeschnitten und der Frischkäse eingefüllt.'=>'Die Süßkartoffeln werden vorsichtig aufgeschnitten und der Frischkäse eingefüllt.',
        'Allergene'=>'Allergene im Gericht: ',
        'Gluten'=>'Gluten',
        'Krebstiere'=>'Krebstiere',
        'Eier'=>'Eier',
        'Fisch'=>'Fisch',
        'Milch'=>'Milch',
        'Bewertungen'=>'Bewertungen',
        'Ingesamt' => 'Ingesamt: ',
        'suchen'=>'Suchen',
        'Sterne'=>'Sterne'
];
$en = [
    'Gericht'=>'Dish: ',
    'Süßkartoffeltaschen mit Frischkäse und Kräutern gefüllt'=>'Sweet potato pockets filled with cream cheese and herbs',
    'Die Süßkartoffeln werden vorsichtig aufgeschnitten und der Frischkäse eingefüllt.'=>'The sweet potatoes are carefully cut open and the cream cheese filled in.',
    'Allergene'=>'Allergens in the dish: ',
    'Gluten'=>'Gluten',
    'Krebstiere'=>'crustaceans',
    'Eier'=>'Eggs',
    'Fisch'=>'Fish',
    'Milch'=>'Milk',
    'Bewertungen'=>'Reviews',
    'Ingesamt' => 'Overall: ',
    'suchen'=>'Search',
    'Sterne'=>'Stars'
];

$showRatings = [];
$searchTerm='';
if (!empty($_GET[GET_PARAM_SEARCH_TEXT])) {
    $searchTerm = $_GET[GET_PARAM_SEARCH_TEXT];
    foreach ($ratings as $rating) {
        if (strpos(strtolower($rating['text']), strtolower($searchTerm)) !== false) {
            $showRatings[] = $rating;
        }
    }
} else if (!empty($_GET[GET_PARAM_MIN_STARS])) {
    $minStars = $_GET[GET_PARAM_MIN_STARS];
    foreach ($ratings as $rating) {
        if ($rating['stars'] >= $minStars) {
            $showRatings[] = $rating;
        }
    }
} else {
    $showRatings = $ratings;
}

function calcMeanStars(array $ratings) : float {
    $sum = 0;
    foreach ($ratings as $rating) {
        $sum += $rating['stars'] ;
    }
    $sum /=count($ratings);
    return $sum;
}


$style='hidden';
$Show =0;
if(isset($_GET['show_description'])){
    $Show=$_GET['show_description'];
    if($Show==1){
        $Show=0;
        $style='show';
    }else if($Show==0){
        $Show=1;
        $style='hidden';
    }
}
$filter='';
if($searchTerm!='') {
    $filter = $searchTerm;
}

if(!empty($_POST['de'])){
    $sprache = $de;
}else if(!empty($_POST['en'])){
    $sprache=$en;
}else{
    $sprache=$de;
}
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8"/>
        <title><?php echo $sprache['Gericht']  .$sprache[$meal['name']]; ?></title>
        <style>
            * {
                font-family: Arial, serif;
            }
            .rating {
                color: darkgray;
            }
        </style>
    </head>
    <body>
        <h1><?php echo $sprache['Gericht']  .$sprache[$meal['name']]; ?></h1>
        <a href="<?php echo '?show_description='.$Show;?>"><?php if($sprache == $de) {
                echo "beschreibung ein/ausblenden";
            }else if($sprache == $en){
                echo "show/hide description";
            }
            ?></a>
        <p style="visibility:<?php echo $style?> "><?php echo $sprache[$meal['description']]; ?> </p>
        <p><?php echo $sprache['Allergene']; ?></p>
        <ul>
            <?php
            foreach ($meal['allergens']as $allergene){
                $list =$allergens[$allergene];
                echo "<li class='allergens'> $sprache[$list] </li>";
            }
            ?>
        </ul>
        <h1><?php echo $sprache['Bewertungen'] ?>(<?php echo $sprache['Ingesamt'] .calcMeanStars($ratings); ?>)</h1>
        <form method="get">
            <label for="search_text">Filter:</label>
            <input id="search_text" type="text" name="search_text" value="<?php echo $filter?>">
            <input type="submit" value="<?php echo $sprache['suchen']?>">
        </form>
        <table class="rating">
            <thead>
            <tr>
                <td>Text</td>
                <td>Author</td>
                <td><?php echo $sprache['Sterne']?></td>
            </tr>
            </thead>
            <tbody>
            <?php
        foreach ($showRatings as $rating) {
            echo "<tr><td class='rating_text'>{$rating['text']}</td>
                      <td class='rating_author'>{$rating['author']}</td>
                      <td class='rating_stars'>{$rating['stars']}</td>
                  </tr>";
        }
        ?>
            </tbody>
        </table>
    <p>Language: </p>
        <form method="post">
            <input type="submit" name="de" value="Deutsch">
            <input type="submit" name="en" value="Englisch">
        </form>
    </body>
</html>