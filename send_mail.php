
<?php
global $h1;
 include('connect.php');
 if(!isset($_SESSION)){
    session_start();
    $id = $_SESSION['UserID'];
    $query = "SELECT * from users where $id=ID";
    $run = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($run);
    $u_mail = $row['Email'];
 }
 if(isset($_SESSION['HouseID'])){
    global $h1;
    $home_id = $_SESSION['HouseID'];
    $query1 = "SELECT * from housesnew where $home_id=ID";
    $run1 = mysqli_query($conn,$query1);
    $row1 = mysqli_fetch_assoc($run1);
    $h1 = $row1['Owner_Number'];
  }
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHP Mailer/Exception.php';
require 'PHP Mailer/PHPMailer.php';
require 'PHP Mailer/SMTP.php';



$mail = new PHPMailer(true);

try {
    //Server settings
                          
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'housebox2320@gmail.com';                     //SMTP username
    $mail->Password   = 'ywlgumeyozqvsswn';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'House Box');
    $mail->addAddress($u_mail);     //Add a recipient
    
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'House Box';
    $mail->Body    = "Dear Customer,
                        Thank you for booking. Your house has been booked. For further details, contact the owner .'$h1' ";
   
    $mail->send();
    echo "
    <script>
    alert('Check your mail for further details');
    window.location.href='search.php';
    </script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}