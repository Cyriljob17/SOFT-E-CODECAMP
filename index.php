
<?php
if (isset($error)) {
    echo "<p class='text-danger'>$error</p>";
} elseif (isset($success) && $success) {
    echo "<h2>REGISTERED!</h2>";
    echo "Welcome " . $name . "<br>";
    echo "Your email address is: " . $email . "<br>";
    echo "Your Gender: " . $gender . "<br>";
}
?>
