<!DOCTYPE html>
<html lang="en">
<body>
<?php
function greetUser($name, $time = "morning") { // function definition with arguments
    echo "Good $time, $name.\n"; // use $time dynamically
}

// function calls
greetUser("Alice"); // Good morning, Alice.
greetUser("Bob", "afternoon"); // Good afternoon, Bob.
?>

</body>
</html>