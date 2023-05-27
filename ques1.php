<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ques1.php" method="get">
        <label>Username</label>
        <input required type="text" name="uname" />
        <label>Password</label>
        <input required type="password" name="password" />
        <input type="submit" />
    </form>
</body>
</html>
<?php
   if(isset($_GET['uname']) && isset($_GET['password'])){
        include("message.php");
   }
?>
