<?php
session_start();

$_SESSION['username'] = 'John';
$_SESSION['role'] = 'Admin';

echo "Username: " . $_SESSION['username'] . "<br>";
echo "Role: " . $_SESSION['role'] . "<br>";

if (isset($_SESSION['username'])) {
    echo "Username exists in the session.<br>";
} else {
    echo "Username does not exist in the session.<br>";
}

unset($_SESSION['role']);

if (isset($_SESSION['role'])) {
    echo "Role exists in the session.<br>";
} else {
    echo "Role does not exist in the session.<br>";
}

session_destroy();
?>