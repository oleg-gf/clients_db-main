<?php
require_once(__DIR__ . "/errors.php");
require_once(__DIR__ . "/query_builder.php");

$dbinfo = require __DIR__ . "/dbinfo.php";

foreach ($_POST as &$value) {
    $value = trim(htmlspecialchars($value));
}


$data = [
    'name' => $_POST['name'],
    'lastname' => $_POST['lastname'],
    'phone' => $_POST['phone'],
    'comment' => $_POST['comment'],
    'date' => date("Y-m-d"),
];

//Валидация и внесение данных в таблицу

$pattern_phone = '/[\D]/';
 
$pattern_name = '/[^А-ЯЁ][^а-яё]/';


$alert = "";

if (preg_match($pattern_name, $data["name"]) || strlen($data["name"]) < 3 || strlen($data["name"]) > 150){
    $alert = 'Имя неверно заполнено
    ';
   
}

if (preg_match($pattern_name, $data["lastname"]) || strlen($data["lastname"]) < 3 || strlen($data["lastname"]) > 150){
    $alert = 'Имя неверно заполнено
    ';
   
}
//settype($data['phone'], "integer");
if (preg_match($pattern_phone, $data["phone"]) || strlen($data["phone"]) < 10 ){
    $alert = 'Телефон неверно заполнен
    ';
};

if (!empty($alert)) {
    $alert = 'Данные из формы не отправлены. Обнаружены следующие ошибки: 
    '.$alert;
    exit ($alert);

} else {
    $query = new QueryBuilder();
    $result = $query->insert($dbinfo['dbtable'], $data);
    
    exit ("Данные из формы отправлены.");
};



