<?php include("header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="PaymentOptions">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4>Payment Options</h4>
                        </div>
                        <div class="card-body">
                            <form action="process_payment.php" method="POST">
                                <div class="form-group">
                                    <label for="payment_method">Select Payment Method:</label>
                                    <select class="form-control" id="payment_method" name="payment_method">
                                        <option value="eSewa">eSewa</option>
                                        <option value="Khalti">Khalti</option>
                                        <!-- Add more payment options if needed -->
                                    </select>
                                </div>
                                <!-- Add other relevant form fields (e.g., registration details) if needed -->

                                <button type="submit" class="btn btn-primary">Proceed to Payment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
