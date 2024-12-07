
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // You can save this data to a database or send an email
    echo "Thank you, $name. Your message has been received.";
}
?>
