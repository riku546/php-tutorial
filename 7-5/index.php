<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
   <?php if (!isset($_POST["text"]) || $_POST["text"] === ""): ?>

    <p style="color:red">メッセージを入力してください</p>
  <?php endif;?>
<?php endif;?>
<form action="" method="post">
    <label for="">
      text:
      <input type="text" name="text" >
    </label>
    <input type="submit" value="send" name="submit">
</form>
</body>
</html>
