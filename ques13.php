<?php
$counter = 0;

if (isset($_COOKIE['hit_counter'])) {
    $counter = $_COOKIE['hit_counter'];
}
$counter++;

setcookie('hit_counter', $counter, time() + (86400 * 30), '/'); 

echo "Number of hits: $counter";

?>
