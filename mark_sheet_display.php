<?php
session_start();

$phy = $_SESSION['phy'];
$bio = $_SESSION['bio'];
$chem = $_SESSION['chem'];
$maths = $_SESSION['maths'];
$marathi = $_SESSION['marathi'];
$english = $_SESSION['english'];

$total_marks = $phy + $bio + $chem + $maths + $marathi + $english;
$percentage = ($total_marks / 600) * 100;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mark Sheet Display</title>
</head>
<body>
    <h1>Mark Sheet</h1>
    <p><strong>Name:</strong> <?php echo $_SESSION['name']; ?></p>
    <p><strong>Class:</strong> <?php echo $_SESSION['class']; ?></p>
    <p><strong>Physics:</strong> <?php echo $phy; ?></p>
    <p><strong>Biology:</strong> <?php echo $bio; ?></p>
    <p><strong>Chemistry:</strong> <?php echo $chem; ?></p>
    <p><strong>Mathematics:</strong> <?php echo $maths; ?></p>
    <p><strong>Marathi:</strong> <?php echo $marathi; ?></p>
    <p><strong>English:</strong> <?php echo $english; ?></p>
    <p><strong>Total Marks:</strong> <?php echo $total_marks; ?></p>
    <p><strong>Percentage:</strong> <?php echo $percentage; ?>%</p>
</body>
</html>
