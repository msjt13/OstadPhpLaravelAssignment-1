<form action="even_odd_checker.php" method="post">
    Number: <input type="text" name="number">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    if ($number % 2 == 0) {
        echo "The number $number is even.";
    } else {
        echo "The number $number is odd.";
    }
}
?>
