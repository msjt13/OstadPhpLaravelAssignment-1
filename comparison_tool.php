<form action="comparison_tool.php" method="post">
    Number 1: <input type="text" name="num1">
    Number 2: <input type="text" name="num2">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $larger = ($num1 > $num2) ? $num1 : $num2;
    echo "The larger number is $larger.";
}