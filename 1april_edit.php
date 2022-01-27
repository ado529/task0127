<?php
//session_start();
include("functions.php");
//check_session_id();

$id = $_GET["id"];

$pdo = connect_to_db();

$sql = 'SELECT * FROM 1april WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>点数編集画面(4月)</title>
</head>

<body>
  <form action="1april_update.php" method="POST">
    <fieldset>
      <legend>点数編集画面(4月)</legend>
      <a href="1april_read.php">点数一覧画面(4月)</a>
      <div>
        出席番号: <input type="number" name="Attendance_number" value="<?= $record["Attendance_number"] ?>">
      </div>
      <div>
        japanese: <input type="number" name="japanese" value="<?= $record["japanese"] ?>">
      </div>
      <div>
        arithmetic: <input type="number" name="arithmetic" value="<?= $record["arithmetic"] ?>">
      </div>
      <div>
        english: <input type="number" name="english" value="<?= $record["english"] ?>">
      </div>      
      <div>
        <button>submit</button>
      </div>
      <input type="hidden" name="id" value="<?= $record["id"] ?>">
    </fieldset>
  </form>

</body>

</html>