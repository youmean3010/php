<?php

$status_codes = [
    [
        "code" => "102",
        "meaning" => "Processing",
        "description" => "処理中である"
    ],
    [
        "code" => "200",
        "meaning" => "OK",
        "description" => "リクエストが正常に成功"
    ],
    [
        "code" => "301",
        "meaning" => "Moved Permanently",
        "description" => "リクエストしたリソースが恒久的に移動されている"
    ],
    [
        "code" => "304",
        "meaning" => "Not Modified",
        "description" => "リクエストしたリソースは更新されていない"
    ],
    [
        "code" => "400",
        "meaning" => "Bad Request",
        "description" => "クライアントのリクエストに異常がある"
    ],
    [
        "code" => "401",
        "meaning" => "Unauthorized",
        "description" => "アクセストークンが無効または認証不可"
    ],
    [
        "code" => "403",
        "meaning" => "Forbidden",
        "description" => "閲覧権限がないファイルやフォルダである"
    ],
    [
        "code" => "404",
        "meaning" => "Not Found",
        "description" => "webページが見つからない"
    ],
    [
        "code" => "500",
        "meaning" => "Internal Server Error",
        "description" => "何らかのサーバ内でエラー発生"
    ],
    [
        "code" => "502",
        "meaning" => "Bad Gateway",
        "description" => "サーバがリクエストを満たすのに必要な機能をサポートしていない"
    ],
    [
        "code" => "503",
        "meaning" => "Service Unavailable",
        "description" => "一時的にサーバにアクセス不可"
    ]

];

// echo ("<pre>");
// var_dump($status_codes);
// echo ("</pre>");
