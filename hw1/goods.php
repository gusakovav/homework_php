<?php

echo 'Задание 1';

// Вывести в html информацию о товарах из массива $goods. Информацию о характеристиках товара (description) выводить в таблице.

$goods = [
    [
        'id' => 1,
        'title' => 'Flute',
        'price' => 20000,
        'img' => 'flute.jpg',
        'description' => [
            'color' => 'white',
            'material' => 'bamboo'
        ]
    ],
    [
        'id' => 2,
        'title' => 'Гитара',
        'price' => 18000,
        'img' => 'guitar.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'linden'
        ]
    ],
    [
        'id' => 3,
        'title' => 'Барабан',
        'price' => 68000,
        'img' => 'drum.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'steel'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<section>
    <?php foreach ($goods as $good): ?>
        <article>
            <h2>Название: <?php echo $good['title'] ?></h2>
            <p>Стоимость: <?php echo $good['price'] ?></p>
            <img src = "../img/items/<?php echo $good['img'] ?>" alt = "" height = "200" width = "800">
        </article>
        <table border = "1" cellspacing="0">
        <tr>
            <th>Characteristics</th>
            <th>Values</th>
        </tr>

        <?php foreach ($good['description'] as $key => $value): ?>
            <tr>
                <th> <?php echo $key ?></th>
                <th> <?php echo $value ?></th>
            </tr>    
        <?php endforeach; ?>

        </table>
    <?php endforeach; ?>
</section>

</body>
</html>



<?php
echo 'Задание 2';

// Отсортировать массив по price. Используйте функцию для работы с массивами (вручную сортировать не нужно).

 $items = [
     [
         'title' => 'Телефон',
         'price' => 100000,
         'count' => 4
     ],
     [
         'title' => 'Часы',
         'price' => 500000,
         'count' => 2
     ],
     [
         'title' => 'Кольцо',
         'price' => 80000,
         'count' => 10
     ],
     [
         'title' => 'Браслет',
         'price' => 120000,
         'count' => 7
     ],
     [
         'title' => 'Галстук',
         'price' => 8000,
         'count' => 50
     ],
 ];


$sortArray = array();

foreach($items as $item){
    foreach($item as $key=>$value){
        if(!isset($sortArray[$key])){
            $sortArray[$key] = array();
        }
        $sortArray[$key][] = $value;
    }
};

$orderby = "price";

array_multisort($sortArray[$orderby],SORT_DESC,$items);

var_dump($items);



echo 'Задание 3<br>';

// Дано:
// $x - количество километров, которое спортсмен пробежал в первый день
// $y - количество километров (не может быть меньше $x)

// В первый день спортсмен пробежал $x километров, а затем он каждый день увеличивал пробег на 10% от предыдущего значения. 
// Определить номер дня, на который пробег спортсмена составит не менее $y километров.

echo 'Вариант 1';
$x = 5;
$y = 70;
$distance = [$x];

while ($y >= $x) {
    $x *= 1.1;
    $distance[] = $x;
    if((array_sum($distance) + $x) > $y){
        break;
}
}
$a = $y - array_sum($distance);
$distance[] = $a;
var_dump ('Для преодоления дистанции спортсмену потребуется ' . count($distance) . ' дней');


var_dump($distance);
var_dump(array_sum($distance));


echo 'Вариант 2';
$x = 10;
$y = 100;
$distance = [$x];

while ($y >= $x) {
    $x *= 1.1;
    $distance[] = $x;
}
var_dump ('Спортсмен сможет пройти ' . $y . ' километров за день на ' . count($distance) . ' день');


var_dump($distance);











