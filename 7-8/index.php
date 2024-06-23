<?php 
session_start();
session_regenerate_id();
$account = "riku";
$_SESSION["account"] = $account;

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
  <p><a href="page.php">next page</a></p>
</body>
</html>