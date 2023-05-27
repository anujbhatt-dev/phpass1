<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>send email</title>
</head>
<body>
<form action="send.php" method="post">
    <label><strong>Enter Email Address</strong></label><br>
    <input type="email" name="mail"><br><br>
    <label><strong>Subject</strong></label><br>
    <input type="text" name="subj"><br><br>
    <label><strong>Enter a message</strong></label><br>
    <input type="text" name="msg"><br><br>
    <input type="submit" name="sbt">
</form>
</body>

</html>