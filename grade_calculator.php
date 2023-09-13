<form action="grade_calculator.php" method="post">
    Score 1: <input type="text" name="score1"><br>
    Score 2: <input type="text" name="score2"><br>
    Score 3: <input type="text" name="score3"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score1 = $_POST["score1"];
    $score2 = $_POST["score2"];
    $score3 = $_POST["score3"];

    $average = ($score1 + $score2 + $score3) / 3;
    echo "Average Score: $average<br>";

    if ($average >= 90)
        echo "Grade: A";
    elseif ($average >= 80)
        echo "Grade: B";
    elseif ($average >= 70)
        echo "Grade: C";
    elseif ($average >= 60)
        echo "Grade: D";
    else
        echo "Grade: F";
}
?>
