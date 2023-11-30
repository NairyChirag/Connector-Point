<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = 'umesh@lanbit.co.in';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $quantity = $_POST['quantity'];
    $para =  $_POST['para'];
    $message = "
    <html>
    <head>
    <title>$subject</title>
    </head>
    <body>
    <p>
    Name: $name
    <br>
    Phone: $phone
    <br>
    Product: $subject
    <br>
    Quantity: $quantity
    <br>
    Message: $para
    <br>
    </p>
    </body>
    </html>
    ";

    // headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From:' . $email . "\r\n";
    
    //send email
    mail($admin_email, $subject , $message, $headers);
    
    header('Location: http://lanbit.co.in/success.html');
  }
?>