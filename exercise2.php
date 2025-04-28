<!DOCTYPE html>
<html lang="en">
<body>
    <?php

// Function to check if a number is even
function isEven($num) {
    return $num % 2 === 0;
}

// Test cases
$testNumbers = [2, 3, 0, -4, 7, 10];

foreach ($testNumbers as $number) {
    if (isEven($number)) {
        echo "$number is even.\n";
    } else {
        echo "$number is odd.\n";
    }
}
?>
</body>
</html>