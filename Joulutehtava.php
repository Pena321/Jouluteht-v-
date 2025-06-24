<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Joulutehtävä</title>
</head>
<body>
    <pre>
<?php
for ($i = 1; $i <= 200; $i++) {
    $tulos = "";

    if ($i % 3 == 0) $tulos .= "pöllö";
    if ($i % 5 == 0) $tulos .= "töllö";
    if ($i % 30 == 0 && $i % 3 == 0 && $i % 5 == 0) $tulos = "tosipöllötöllö";

    echo $tulos ? $tulos : $i;
    echo "\n";
}
?>
    </pre>
</body>
</html>
