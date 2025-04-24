<?php

//東京の時刻と選択した都市の時間を取得
require_once("functions/search_city_time.php");
$tokyo = searchCityTime("東京", "大阪");
//入力を安全に処理するためにXSS攻撃を防ぐ
$city = htmlspecialchars($_GET["city"], ENT_QUOTES);
// searchCityTime.phpのsearchCityTime関数を呼び出している
// $cityを引数で送っている
$comparision = searchCityTime($city);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a href="index.php" class="header__logo">
                World Clock
            </a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result-cards">
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img src="img/<?php echo $tokyo["img"] ?>" alt="国旗" class="result-card__img">
                    </div>

                    <div class="result-card__body">
                        <p class="result-card__city">
                            <?php echo $tokyo["name"] ?></p>
                        <p class="result-card__time">
                            <?php echo $tokyo["time"] ?></p>
                    </div>
                </div>

                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img src="img/<?php echo $comparision["img"] ?>" alt="国旗" class="result-card__img">
                    </div>

                    <div class="result-card__body">
                        <p class="result-card__city">
                            <?php echo $comparision["name"] ?></p>
                        <p class="result-card__time">
                            <?php echo $comparision["time"] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>