<?php
// $company = htmlspecialchars ($_POST["company"], ENT_QUOTES);
// echo "会社名は" . $company . "ですね";
$company = htmlspecialchars ($_GET["company"], ENT_QUOTES);
echo "会社名は" . $company . "ですね";