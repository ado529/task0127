<?php
//session_start();
include("functions.php");
//check_session_id();

//var_dump($_POST);
//var_dump($_FILES);
//exit();

if (
  !isset($_POST['Attendance_number']) || $_POST['Attendance_number'] == '' ||
  !isset($_POST['name']) || $_POST['name'] == '' ||
  !isset($_POST['birthday']) || $_POST['birthday'] == '' ||
  !isset($_POST['id']) || $_POST['id'] == ''
) {
  echo json_encode(["error_msg" => "no input"]);
  exit();
}

$Attendance_number = $_POST["Attendance_number"];
$name = $_POST["name"];
$birthday = $_POST["birthday"];
$id = $_POST["id"];

if($_FILES['upfile']['error']==4){
  $save_path=null;
}else if(isset($_FILES['upfile'])&&$_FILES['upfile']['error']==0){
  $uploaded_file_name=$_FILES['upfile']['name'];
  $temp_path=$_FILES['upfile']['tmp_name'];
  $directory_path='upload/';

  $extension=pathinfo($uploaded_file_name,PATHINFO_EXTENSION);
  $unique_name=date('YmdHis').md5(session_id()).'.'.$extension;
  $save_path=$directory_path.$unique_name;

  if(is_uploaded_file($temp_path)){
    if(move_uploaded_file($temp_path,$save_path)){
      chmod($save_path,0644);
    }else{
      exit('Error:アップロードできませんでした');
    }
  }else{
    exit('Error:画像がありません');
  }
}else{
  exit('Error:画像が送信されていません');
}

$pdo = connect_to_db();

$sql = "UPDATE management SET Attendance_number=:Attendance_number, image=:image, name=:name, birthday=:birthday, updated_at=now() WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':Attendance_number', $Attendance_number, PDO::PARAM_STR);
$stmt->bindValue(':image', $save_path, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:name_read.php");
exit();
