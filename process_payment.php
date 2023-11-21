<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_payment_method = $_POST['payment_method'];
    
    // Perform user registration and payment processing based on the selected payment method
    if ($selected_payment_method === "eSewa") {
        // Handle eSewa payment processing (e.g., redirect to eSewa payment page)
        // Implement eSewa payment integration here
        // After successful payment, consider marking the order as paid and saving order details
    } elseif ($selected_payment_method === "Khalti") {
        // Handle Khalti payment processing (e.g., redirect to Khalti payment page)
        // Implement Khalti payment integration here
        // After successful payment, consider marking the order as paid and saving order details
    } else {
        // Handle an invalid selection or other logic here
        echo "Invalid Payment Method Selection";
    }
} else {
    // Handle other HTTP request methods or errors
    echo "Invalid Request";
}
?>
