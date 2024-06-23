<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p><?php echo htmlspecialchars($_POST["text"], ENT_QUOTES | ENT_HTML5) ?></p>
</body>
</html>