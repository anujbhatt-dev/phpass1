<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['page2_total'] += $_POST['amount'];
    header('Location: bill.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Mall - Page 2</title>
</head>
<body>
    <h1>Shopping Mall - Page 2</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="amount">Enter the amount:</label>
        <input type="number" id="amount" name="amount" min="0" required><br><br>
        <input type="submit" value="Add to Cart">
    </form>
</body>
</html>
