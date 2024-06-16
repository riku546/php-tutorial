<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="sample11.php" method="post">
  <input type="number" name="num">
  <input type="submit" value="SEND">
</form>
</body>
</html>


<?php
$color = $_POST["num"];

switch ($color) {
    case 1:

        echo "1";
        break;

    default:
        echo "other";
        break;
}