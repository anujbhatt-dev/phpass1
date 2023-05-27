<?php
session_start();

$total = $_SESSION['page1_total'] + $_SESSION['page2_total'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Mall - Bill</title>
</head>
<body>
    <h1>Shopping Mall - Bill</h1>
    <h2>Page 1 Total: <?php echo $_SESSION['page1_total']; ?></h2>
    <h2>Page 2 Total: <?php echo $_SESSION['page2_total']; ?></h2>
    <h2>Total: <?php echo $total; ?></h2>
</body>
</html>
