<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['phy'] = $_POST['phy'];
    $_SESSION['bio'] = $_POST['bio'];
    $_SESSION['chem'] = $_POST['chem'];
    $_SESSION['maths'] = $_POST['maths'];
    $_SESSION['marathi'] = $_POST['marathi'];
    $_SESSION['english'] = $_POST['english'];
    header('Location: mark_sheet_display.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mark Sheet</title>
</head>
<body>
    <h1>Mark Sheet</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $_SESSION['name']; ?>" readonly><br><br>

        <label for="class">Class:</label>
        <input type="text" id="class" name="class" value="<?php echo $_SESSION['class']; ?>" readonly><br><br>

        <label for="phy">Physics:</label>
        <input type="number" id="phy" name="phy" min="0" max="100" required><br><br>

        <label for="bio">Biology:</label>
        <input type="number" id="bio" name="bio" min="0" max="100" required><br><br>

        <label for="chem">Chemistry:</label>
        <input type="number" id="chem" name="chem" min="0" max="100" required><br><br>

        <label for="maths">Mathematics:</label>
        <input type="number" id="maths" name="maths" min="0" max="100" required><br><br>

        <label for="marathi">Marathi:</label>
        <input type="number" id="marathi" name="marathi" min="0" max="100" required><br><br>

        <label for="english">English:</label>
        <input type="number" id="english" name="english" min="0" max="100" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
