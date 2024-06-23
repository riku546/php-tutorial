<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
if ($_SERVER["REQUEST_METHOD"] === "POST"):
    $account = filter_input(INPUT_POST, "account");
    setcookie("account", $account, time() + 3600);
    echo $account;
endif;
?>
  <form action="" method="post">
    <label for="">
      アカウント名
      <?php $data = filter_input(INPUT_COOKIE, "account")?>
      <input type="text" name="account" value=<?php echo htmlspecialchars($data); ?>  >

    </label>
    <input type="submit" value="ログイン">
  </form>
</body>
</html>