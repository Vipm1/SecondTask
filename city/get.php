<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include_once '../src/database.php';
include_once '../models/city.php';

$datbases = new Database();
$dbhka = $datbases->getConnection();

$city = new City($dbhka);

$cityGet = $city->get();

$cityRowCount = $cityGet->rowCount();

if ($cityRowCount > 0) {

    $cityArr = array();
    $cityArr["items"] = array();

    while ($row = $cityGet->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        $city_item = array(
            "id" => $id,
            "name" => $name,
        );

        $cityArr["items"][] = $city_item;

    }

    http_response_code(200);

    echo json_encode($cityArr);

} else {
    http_response_code(404);

    echo json_encode(["message" => "Города не найдены."]);
}
