<?php
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
$jahr = $famousMeals[1]['winner']+$famousMeals[2]['winner']+$famousMeals[3]['winner']+$famousMeals[4]['winner'];

var_dump($jahr);
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
    <li><?php echo $famousMeals[1]['name']?><br> <?php foreach ($famousMeals[1]['winner'] as $winner) echo $winner,', '?></li>
    <li><?php echo $famousMeals[2]['name']?><br> <?php foreach ($famousMeals[2]['winner'] as $winner) echo $winner,', '?></li>
    <li><?php echo $famousMeals[3]['name']?><br> <?php foreach ($famousMeals[3]['winner'] as $winner) echo $winner,', '?></li>
    <li><?php echo $famousMeals[4]['name']?><br> <?php echo $famousMeals[4]['winner']?></li>
</ol>
<p> Jahr Ohne Gewinner :</p>
<?php for($i = 2000;$i <=2022;$i++)
{
    if(!$jahr.array_search($i)) echo $i,'i';
}
?>


</body>
</html>
