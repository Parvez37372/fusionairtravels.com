<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form se data fetch karna
    $from = $_POST["from"];
    $to = $_POST["to"];
    $depart_date = $_POST["depart-date"];
    $passenger = $_POST["passenger"];

    // (Yahan database ya email system me store karne ka code likh sakte ho)

    // Redirect to Thank You page
    header("Location: thank-you.php");
    exit();
}
?>
