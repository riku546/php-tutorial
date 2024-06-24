<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <h1>投稿</h1>
  <form action="post_list.php" method="post" style="display: flex; flex-direction:column;">
    <label for="">
      name: <input type="text" name="name">
    </label>
    <label for="">
      post: <input type="text" name="post">
    </label>
    <input type="submit" value="send" style="width: 80px;">
  </form>
</body>
</html>