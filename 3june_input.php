<?php
//session_start();
include("functions.php");
//check_session_id();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>点数入力画面(6月)</title>
</head>

<body>
  <form action="3june_create.php" method="POST">
    <fieldset>
      <legend>点数入力画面(6月)</legend>
      <a href="3june_read.php">一覧画面(6月)</a>
      <div>
        出席番号: <input type="number" name="Attendance_number">
      </div>
      <div>
        japanese: <input type="number" name="japanese">
      </div>
      <div>
        arithmetic: <input type="number" name="arithmetic">
      </div>
      <div>
        english: <input type="number" name="english">
      </div>
      <div>
        <button>登録</button>
      </div>
    </fieldset>
  </form>

</body>

</html>