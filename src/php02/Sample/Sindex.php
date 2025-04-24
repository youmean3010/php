<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="../Sample/css/Ssanitize.css">
    <link rel="stylesheet" href="../Sample/css/Scommon.css">
    <link rel="stylesheet" href="../Sample/css/Sindex.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="Sample/Sresult.php">
                World Clock
            </a>
        </div>
    </header>

    <main>
        <div class="search-form__content">
            <div class="search-form__heading">
                <h2>日本と世界の時間を比較</h2>
            </div>
            <form class="search-form" action="Sresult.php" method="get">
                <div class="search-form__item">
                    <select class="search-form__item-select" name="city">
                        <option value="上海">上海</option>
                        <option value="フロリダ">フロリダ</option>
                        <option value="パリ">パリ</option>
                        <option value="ニューヨーク">ニューヨーク</option>
                        <option value="モスクワ">モスクワ</option>
                    </select>
                </div>
                <div class="search-form__button">
                    <button class="search-form__button-submit" type="submit">
                        検索
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>