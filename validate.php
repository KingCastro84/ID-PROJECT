<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serial = $_POST['serial'];

    // Check if empty
    if (empty($serial)) {
        die(" Serial number cannot be empty.");
    }

    // Check if numeric
    if (!is_numeric($serial)) {
        die(" Serial number must be numeric.");
    }

    // 3. Check length (example: 8 digits)
    if (strlen($serial) != 8) {
        die(" Serial number must be exactly 8 digits.");
    }
    // Sanitize input
$serial = htmlspecialchars($serial);   // Prevent HTML/JS
$serial = trim($serial);               // Remove spaces at start/end
$serial = stripslashes($serial);       // Remove backslashes
$serial = filter_var($serial, FILTER_SANITIZE_NUMBER_INT); // Keep only numbers

    // If we pass all checks
    echo " Valid serial number: " ;
    // Show it back to the user
    echo "You entered: " . htmlspecialchars($serial);// Show it back to the user
   
}
?>


  



    


