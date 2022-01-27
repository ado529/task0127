<?php
//session_start();
include("functions.php");
//check_session_id();

$pdo = connect_to_db();

$sql = "SELECT * FROM management ORDER BY Attendance_number ASC";

$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["Attendance_number"]}</td>
      <td><img src='{$record["image"]}'height='150px'></td>
      <td>{$record["name"]}</td>
      <td>{$record["birthday"]}</td>
      <td><a href='name_edit.php?id={$record["id"]}'>edit</a></td>
      <td><a href='name_delete.php?id={$record["id"]}'>delete</a></td>
    </tr>
  ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>生徒名一覧画面</title>
</head>

<body>
  <fieldset>
    <legend>生徒名一覧画面</legend>
    <a href="name_register.php">生徒名入力画面</a>
    <a href="1april_input.php">点数入力画面(4月)</a>
    <a href="2may_input.php">点数入力画面(5月)</a>
    <a href="3june_input.php">点数入力画面(6月)</a>
    <table>
      <thead>
        <tr>
          <th>Attendance_number</th>
          <th>顔写真</th>
          <th>name</th>
          <th>birthday</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>