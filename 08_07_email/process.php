<?php
$message = '';
foreach ($_POST as $name => $value) {
    if('submit' != $name) {
        if ( is_array( $value ) ) {
            $value = implode(", ", $value);
        }
        $message .=  ucfirst( $name ) . "is $value.\n\n";
    }
}

$to = "Daniel Zamanillo <dzamanillok@gmail.com>";
$subject = "Reason for Contact: " . $_POST['reason'];
$from = $_POST['name'] . "<" . $_POST['email'] . ">";

$headers = 'From:' . $from . "\r\n" .
    'Reply-To:' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


if ( mail($to, $subject, $message, $headers) ){
    echo "<h3>Thank you for contacting us.</h3>";
}