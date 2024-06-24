<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  require_once 'db.php';

  try {
    $dbh = new PDO($dsn, $user, $password);

    if($_SERVER["REQUEST_METHOD"] === "POST"){
      $input_name = filter_input(INPUT_POST , "name");
      $input_text = filter_input(INPUT_POST , "post");
  
  
      $sql = "INSERT INTO posting_info(  name , post)
       VALUES(:name , :post)";
  
       $stmt = $dbh -> prepare($sql);
       $stmt->bindParam(':name' , $input_name ,PDO::PARAM_STR );
       $stmt->bindParam(':post' , $input_text ,PDO::PARAM_STR);
  
       $stmt->execute();
  
      header("Location:http://localhost/php-tutorial/bulletin_board/post_list.php");
    }
    
  } catch (PDOException $e) {
    echo ('Error:' . $e->getMessage());
    die();
  }





  ?>
  
  <h1>投稿</h1>
  <?php
  if(true):

  endif;
  ?>
  <form action=""  method="post" style="display: flex; flex-direction:column;">
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