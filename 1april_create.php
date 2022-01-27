<?php
//session_start();
include("functions.php");
//check_session_id();

//var_dump($_POST);
//exit();

if (
  !isset($_POST['Attendance_number']) || $_POST['Attendance_number'] == '' ||
  !isset($_POST['japanese']) || $_POST['japanese'] == '' ||
  !isset($_POST['arithmetic']) || $_POST['arithmetic'] == '' ||
  !isset($_POST['english']) || $_POST['english'] == ''
) {
  echo json_encode(["error_msg" => "no input"]);
  exit();
}

$Attendance_number = $_POST['Attendance_number'];
$japanese = $_POST['japanese'];
$arithmetic = $_POST['arithmetic'];
$english = $_POST['english'];

$pdo = connect_to_db();

$sql='SELECT COUNT(*)FROM 1april WHERE Attendance_number=:Attendance_number';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':Attendance_number', $Attendance_number, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$Attendance_number_count = $stmt->fetchColumn();
// まずはデータ確認
//var_dump($Attendance_number_count);
//exit();

if($Attendance_number_count !=0){
  echo "<p>すでに登録されてます。editからお願いします。</p>";
  echo "<a href=1april_read.php>点数一覧(4月)</a>";
  exit();
} else {
  // 入力が無い状態
  $sql = 'INSERT INTO 1april(id, Attendance_number, japanese, arithmetic, english, created_at, updated_at) VALUES(NULL, :Attendance_number, :japanese, :arithmetic, :english, now(), now())';
}

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':Attendance_number', $Attendance_number, PDO::PARAM_STR);
$stmt->bindValue(':japanese', $japanese, PDO::PARAM_STR);
$stmt->bindValue(':arithmetic', $arithmetic, PDO::PARAM_STR);
$stmt->bindValue(':english', $english, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:1april_input.php");
exit();
