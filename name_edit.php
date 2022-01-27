<?php
//session_start();

include("functions.php");
//check_session_id();

$id = $_GET["id"];

$pdo = connect_to_db();

$sql = 'SELECT * FROM management WHERE id=:id';

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
  <title>生徒名一覧(編集画面）</title>
</head>

<body>
  <form action="name_update.php" method="POST" enctype="multipart/form-data">
    <fieldset>
      <legend>生徒名一覧(編集画面）</legend>
      <a href="name_read.php">一覧画面</a>
      <div>
        出席番号: <input type="number" name="Attendance_number" value="<?= $record["Attendance_number"] ?>">
      </div>
      <div>
        顔写真:<input type="file" name="upfile" value="<?= $record["upfile"] ?>" accept="image/*" capture="camera" />
      </div>
      <div>
        name: <input type="text" name="name" value="<?= $record["name"] ?>">
      </div>
      <div>
        birthday: <input type="date" name="birthday" value="<?= $record["birthday"] ?>">
      </div>
      <div>
        <button>submit</button>
      </div>
      <input type="hidden" name="id" value="<?= $record["id"] ?>">
    </fieldset>
  </form>

</body>

</html>