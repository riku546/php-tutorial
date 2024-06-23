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
    $sql = 'select name , post from posting_info';
    $data = $dbh->query($sql);

} catch (PDOException $e) {
    echo ('Error:' . $e->getMessage());
    die();
}

?>

<?php

?>


<div class="post_container">
  <?php
foreach ($data as $row) {
    echo htmlspecialchars("name: " . $row["name"]);
    echo "<br>";
    echo htmlspecialchars("text: " . $row["post"]);
    echo "<hr>";
}

$dbh = null;
?>
</div>


</body>
</html>