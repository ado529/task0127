<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>生徒登録画面</title>
</head>

<body>
  <form action="name_register_act.php" method="POST" enctype="multipart/form-data">
    <fieldset>
      <legend>生徒登録画面</legend>
      <a href="name_read.php">生徒名一覧画面</a>
      <div>
        出席番号: <input type="number" name="Attendance_number">
      </div>
      <div>
        顔写真:<input type="file" name="upfile" accept="image/*" capture="camera" />
      </div>
      <div>
        name: <input type="text" name="name">
      </div>
      <div>
        birthday: <input type="date" name="birthday">
      </div>
      <div>
        <button>登録</button>
      </div>
      <a href="name_register.php"></a>
    </fieldset>
  </form>

</body>

</html>