<?php
/**
 * Praktikum DBWT. Autoren:
 * Fachrial Dimas Putra, Perdana, 3503937
 * Jericho, Jordan, 3536333
 */
$famousMeals = [
    1 => ['name' => 'Currywurst mit Pommes',
        'winner' => [2001, 2003, 2007, 2010, 2020]],
    2 => ['name' => 'Hähnchencrossies mit Paprikareis',
        'winner' => [2002, 2004, 2008]],
    3 => ['name' => 'Spaghetti Bolognese',
        'winner' => [2011, 2012, 2017]],
    4 => ['name' => 'Jägerschnitzel mit Pommes',
        'winner' => 2019]
];
$jahr = array();
foreach ($famousMeals[1]['winner'] as $key) array_push($jahr,$key);
foreach ($famousMeals[2]['winner'] as $key) array_push($jahr,$key);
foreach ($famousMeals[3]['winner'] as $key) array_push($jahr,$key);
array_push($jahr,$famousMeals[4]['winner']);

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"/>
    <title>Array</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>
<body>
<ol>
    <li><?php echo $famousMeals[1]['name']?><br> <?php $first = true;
        foreach ($famousMeals[1]['winner'] as $winner) {if($first){echo $winner;$first = false;}else echo ',',$winner;}?></li>
    <li><?php echo $famousMeals[2]['name']?><br> <?php $first = true;
        foreach ($famousMeals[2]['winner'] as $winner) {if($first){echo $winner;$first = false;}else echo ',',$winner;}?></li>
    <li><?php echo $famousMeals[3]['name']?><br> <?php $first = true;
        foreach ($famousMeals[3]['winner'] as $winner) {if($first){echo $winner;$first = false;}else echo ',',$winner;}?></li>
    <li><?php echo $famousMeals[4]['name']?><br> <?php echo $famousMeals[4]['winner']?></li>
</ol>
<p> Jahr Ohne Gewinner :
<?php
$first = true;
for($i = 2000;$i<=2022;$i++)
{
    $exist = false;
    for($j = 0 ; $j<12 ; $j++){
        if($i == $jahr[$j]) $exist = true;

    }
    if($exist == false) {
        if($first){$first = false; echo $i;}
        else echo ',',$i;}
}
?>
</p>

</body>
</html>
