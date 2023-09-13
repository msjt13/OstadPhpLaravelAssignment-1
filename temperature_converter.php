<form action="temperature_converter.php" method="post">
    Temperature: <input type="text" name="temperature">
    <select name="conversion">
        <option value="c_to_f">Celsius to Fahrenheit</option>
        <option value="f_to_c">Fahrenheit to Celsius</option>
    </select>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST["temperature"];
    $conversion = $_POST["conversion"];

    if ($conversion == "c_to_f") {
        $converted = ($temperature * 9/5) + 32;
        echo "$temperature&deg;C is equal to $converted&deg;F";
    } else {
        $converted = ($temperature - 32) * 5/9;
        echo "$temperature&deg;F is equal to $converted&deg;C";
    }
}
?>
