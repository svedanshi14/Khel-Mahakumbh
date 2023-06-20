<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $des=$_POST["designation"];
      if($des=="Player")
      {
        header("location: player_login.php");
        exit;
      }
      else
      {
        header("location: coach_login.php");
        exit;
      }
    }
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <h1>Are you player or coach ? Type "Player" OR "Coach" </h1>
        <input type="text" id="designation" name="designation">
        <input type="submit" value="submit">
    </form>
</body>
</html>