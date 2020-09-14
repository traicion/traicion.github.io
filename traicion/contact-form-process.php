<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "traicion.uno@gmail.com";
    $email_subject = "Contacto traición digital";

    function problem($error)
    {
        echo "hubo un error. ";
        echo "Los errores aparecen abajo.<br><br>";
        echo $error . "<br><br>";
        echo "arrégalos.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Nombre']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Mensaje'])
    ) {
        problem('hubo un problema.');
    }

    $name = $_POST['Nombre']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Mensaje']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'tu dirección de correo no es válida.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'tu nombre no es válido.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'tu mensaje no es válido.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "detalles abajo.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "nombre: " . clean_string($name) . "\n";
    $email_message .= "correo: " . clean_string($email) . "\n";
    $email_message .= "mensaje: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your success message below -->

    gracias por tu mensaje.

<?php
}
?>