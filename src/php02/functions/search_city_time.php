<?php


//指定された都市の現在時刻を取得する関数を定義
function searchCityTime($city_name)
{
    //都市情報phpの読み込み
    require("config/cities.php");

    // $cities = [
    //     [
    //         "name" => "シドニー",
    //         "time_zone" => "Australia/Sydney",
    //         "img" => "australia.jpg"
    //     ],


    //DateTimeクラスを使用して、指定されたタイムゾーンの現在の時間を取得
    foreach ($cities as $city) {
        // 左辺はシドニー、右辺は5行目の$city_name
        if ($city["name"] === $city_name) {
            $date_time = new DateTime("", new DateTimeZone($city["time_zone"]));
            $time = $date_time->format("H:i");
            $city["time"] = $time;
            //都市の情報を返す
            return $city;
        }
    }
}
