<?php
echo 'Задание №1<br>';
$name = 'Константин';
$age = '24';
echo "Меня зовут $name<br>";
echo "Мне $age года<br>";
echo "\"!|\\/'\"\\<br>";

echo '<br>Задание №2<br>';
$all_drawings = 80;
$marker_drawings = 23;
$pensil_drawings = 40;
echo "Дана задача: На школьной выставке $all_drawings рисунков. $marker_drawings из них выполнены<br>
фломастерами, $pensil_drawings карандашами, а остальные — красками. Сколько рисунков,<br>
выполненные красками, на школьной выставке?<br>";
$paints_drawings = $all_drawings - $marker_drawings - $pensil_drawings;
echo "Красками выполнено рисунков: $all_drawings - $marker_drawings - $pensil_drawings = $paints_drawings.<br>";

echo '<br>Задание №3<br>';
define('A', 100);
echo defined('A') . '<br>';
echo A . '<br>';
define('A', 100);

echo '<br>Задание №4<br>';
$age = rand(0, 100);
if (18 <= $age and $age <= 65) {
    echo "Вам еще работать и работать";
} elseif (65 < $age) {
    echo "Вам пора на пенсию";
} elseif (1 < $age and $age < 17) {
    echo "Вам ещё рано работать";
} else {
    echo "Неизвестный возраст";
}
echo '<br>';

echo '<br>Задание №5<br>';
$day = rand(0, 8);
switch ($day) {
    case 1:
        echo 'Это рабочий день';
        break;
    case 2:
        echo 'Это рабочий день';
        break;
    case 3:
        echo 'Это рабочий день';
        break;
    case 4:
        echo 'Это рабочий день';
        break;
    case 5:
        echo 'Это рабочий день';
        break;
    case 6:
        echo 'Это выходной день';
        break;
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
}
echo '<br>';

echo '<br>Задание №6<br>';
$bmv = ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => '2015'];
$toyota = ['model' => 'Rav4', 'speed' => 100, 'doors' => 3, 'year' => '2016'];
$opel = ['model' => 'astra', 'speed' => 110, 'doors' => 4, 'year' => '2014'];
$cars = [$bmv, $toyota, $opel];
foreach ($cars as $value) {
    $name = strtoupper(array_search($value, get_defined_vars(), true));
    echo "Car $name<br>{$value['model']} {$value['speed']} {$value['doors']} {$value['year']}<br>";
}

echo '<br>Задание №7<br>';
echo '<table>';
for ($row = 1; $row <= 10; $row++) {
    echo '<tr>';
    for ($column = 1; $column <= 10; $column++) {
        $result = $row * $column;
        if ($row % 2 === 0 and $column % 2 === 0) {
            echo "<td align='center'>($result)";
        } elseif ($row % 2 === 1 and $column % 2 === 1) {
            echo "<td align='center'>[$result]";
        } else {
            echo "<td align='center'>$result";
        }
    }
    echo '</tr>';
}
echo '</table><br>';

echo '<br>Задание №8<br>';
$str = '123 456';
$array = explode(' ', $str);
print_r($array);
$i = count($array);
while ($i > 0) {
    $i--;
    $result_array[] = $array["$i"];
}
$result_str = implode('|', $result_array);
echo '<br>' . $result_str;
