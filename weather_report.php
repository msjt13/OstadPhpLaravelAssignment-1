<?php
$temperature = 15;

if ($temperature <= 0) {
    echo "It's freezing!";
} elseif ($temperature <= 24) {
    echo "It's cool.";
} else {
    echo "It's warm.";
}