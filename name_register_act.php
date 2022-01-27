<?php
//session_start();
include('functions.php');

//var_dump($_POST);
//var_dump($_FILES);
//exit();


$Attendance_number = $_POST['Attendance_number'];
$name = $_POST['name'];
$birthday = $_POST['birthday'];

if($_FILES['upfile']['error']==4){
  $save_path=null;
} else if(isset($_FILES['upfile'])&&$_FILES['upfile']['error']==0){
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

$sql = 'INSERT INTO management (id, Attendance_number, image, name, birthday,created_at, updated_at) VALUES(NULL, :Attendance_number, :image, :name, :birthday, now(), now())'; 

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':Attendance_number', $Attendance_number, PDO::PARAM_STR);
$stmt->bindValue(':image', $save_path, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:name_register.php");
exit();

//$val = $stmt->fetch(PDO::FETCH_ASSOC);

//if (!$val) {
//  echo "<p>ログイン情報に誤りがあります</p>";
//  echo "<a href=todo_login.php>ログイン</a>";
//  exit();
//} else {
//  $_SESSION = array();
//  $_SESSION['session_id'] = session_id();
//  $_SESSION['is_admin'] = $val['is_admin'];
//  $_SESSION['username'] = $val['username'];
//  header("Location:todo_read.php");
//  exit();
//}
