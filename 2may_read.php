<?php
//session_start();
include("functions.php");
//check_session_id();

$pdo = connect_to_db();

$sql = "SELECT * FROM 2may ORDER BY Attendance_number ASC";

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
      <td>{$record["japanese"]}</td>
      <td>{$record["arithmetic"]}</td>
      <td>{$record["english"]}</td>
      <td><a href='2may_edit.php?id={$record["id"]}'>edit</a></td>
    </tr>
  ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>点数一覧(5月)</title>
</head>

<body>
  <fieldset>
    <legend>点数一覧(5月)</legend>
    <a href="2may_input.php">点数入力画面(5月)</a>
    <table>
      <thead>
        <tr>
          <th>Attendance_number</th>
          <th>japanese</th>
          <th>arithmetic</th>
          <th>english</th>
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