<?php
session_start();
if (isset($_SESSION["account"])) {
    $account = $_SESSION["account"];

} else {
    $account = "";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php echo htmlspecialchars($account); ?>
</body>
</html>