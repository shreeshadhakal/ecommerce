<?php
session_start();
$con=mysqli_connect("localhost","root","","ecom");

if(mysqli_connect_error()){
    echo"<script>
    alert('cannot connect to database');
    window.location.href = 'mycart.php';
   </script>";
   exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST")
 {

    if(isset($_POST['purchase']))
    {
      $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[fullname]','$_POST[phonenumber]','$_POST[address]','$_POST[pay_mode]')";
    if(mysqli_query($con,$query1))
      {
        $Order_id=mysqli_insert_id($con);
        $query2="INSERT INTO `user_orders`(`Order_id`, `product_name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
        $stmt=mysqli_prepare($con,$query2);
        if($stmt)
        {
        mysqli_stmt_bind_param($stmt,"isii",$Order_id,$product_name,$Price,$Quantity);
        foreach($_SESSION['cart'] as $key => $values)
        {
            $product_name=$values['product_name'];
            $Price=$values['Price'];
            $Quantity=$values['Quantity'];
            mysqli_stmt_execute($stmt);
        }
        unset($_SESSION['cart']);
        echo"<script>
        alert('Order Placed');
        window.location.href = 'index.php';
       </script>";

        }
        else
        {
            echo"<script>
            alert('SQL Query Prepare Error');
            window.location.href = 'mycart.php';
           </script>";
        }
    }
      else
      {
        echo"<script>
        alert('SQL Error');
        window.location.href = 'mycart.php';
       </script>";
      }
    }

 }
 ?>