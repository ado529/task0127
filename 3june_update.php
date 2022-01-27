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
  !isset($_POST['english']) || $_POST['english'] == '' ||
  !isset($_POST['id']) || $_POST['id'] == ''
) {
  echo json_encode(["error_msg" => "no input"]);
  exit();
}

$Attendance_number = $_POST["Attendance_number"];
$japanese = $_POST["japanese"];
$arithmetic = $_POST["arithmetic"];
$english = $_POST["english"];
$id = $_POST["id"];

$pdo = connect_to_db();

$sql = "UPDATE 3june SET Attendance_number=:Attendance_number, japanese=:japanese, arithmetic=:arithmetic, english=:english, updated_at=now() WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':Attendance_number', $Attendance_number, PDO::PARAM_STR);
$stmt->bindValue(':japanese', $japanese, PDO::PARAM_STR);
$stmt->bindValue(':arithmetic', $arithmetic, PDO::PARAM_STR);
$stmt->bindValue(':english', $english, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:3june_read.php");
exit();
