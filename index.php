<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$a = "tajik pidor";
if ($a == "tajik pidor"){
    echo "YES". '<br>';
}
else {
    echo "NO". '<br>';
}
echo "-------------------------". '<br>';
$tajik = array(1 , 3, 4, 6, "Таджик", 2, 10, "!", "Пидор", " ");
echo $tajik [4]. $tajik[9]. $tajik[8]. $tajik[7]. '<br>';
$arr = ["Все таджики пидарасы!", "Пидарас таджик по имени Хажи!", "Тажики не пидорасы!", "Утверждение под индексом 2 false!", "Саид пидарас!"];
echo $arr[1]. '<br>';
echo "-------------------------". '<br>';
$tajiki = "pidor";
switch($tajiki){
    case "nepidor";
        echo "Пиздит он ещё какой он пидор";
        break;
    case "pidor";
        echo "Нахуй я это пишу я даже не ебу что нахуй этот switch case";
        break;
    case "Бадр иди да нахуй";
        echo "Ну вот нахуй я эту залупу пишу лучше бы Секси Бэтмена посмотрел";
        break;
    case "Фразы Секси Бэтмена";
        echo "Накажем парочку плахишей, и вступим с ними в контакт";
        break;
    case "Дефолт Таджик";
        echo "Очки ровно сидят";
        break;
}
echo "-------------------------". '<br>';
echo "Подарочек для Бадра - https://img.pvvstream.pro/preview/8C5g6DGW82n8Le0l0kboiw/189708238_456239178/sun9-16.userapi.com/c851336/v851336848/d6189/tx-H2zzSqtM.jpg". '<br>';
?>
</body>
</html>
