<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
// require 'vendor/autoload.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $university = $_POST['university'];
    $whyAISU = $_POST['whyAISU'];
    $hearAISU = $_POST['hearAISU'];
    $howAISU = $_POST['howAISU'];


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'aisu4india@gmail.com';                     //SMTP username
        $mail->Password   = 'curtjjwqdalfxjgo';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('aisu4india@gmail.com', 'aisu4india');
        $mail->addAddress($email, $name);
        $mail->addReplyTo('support@aisu4india.in', 'AISU');

        //Content
        $mail->isHTML(true);                                          //Set email format to HTML
        $mail->Subject = 'Thank You for your interest in joining our community';
        $mail->Body = "<!DOCTYPE html>
        <html lang='en'>
        
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Document</title>
        </head>
        
        <body>
            <div>
                <div style='text-align: center;'>
                    <img src='https://aisu4india.in/wp-content/uploads/2023/06/AISU.png' alt='' style='height: 5rem; width: 5rem;'> <br>
                    <img src='https://images.freeimages.com/images/large-previews/449/welcome-1639515.png' alt='' style='height: 3rem;'>
                </div>
                <div>
                    <h2 style='color: #fc8c35;'>
                        Welcome!!
                    </h2>
                    <p>
                        Hello <b>$name</b>,<br>
                        Thank you for your interest in joining our community. we are always looking for talented and motivated
                        individuals who are passionate about what they do and who are commited to helping our organization reach
                        its goal.
                    </p>
                    <h3 style='color: #fc8c35;'>
                        <u>Your Details :</u>
                    </h3>
                    <p>
                        <b>Name:</b> <span style='color: cornflowerblue;'>$name</span> <br>
                        <b>Email:</b> <span style='color: cornflowerblue;'>$email</span> <br>
                        <b>Gender:</b> <span style='color: cornflowerblue;'>$gender</span> <br>
                        <b>DOB:</b> <span style='color: cornflowerblue;'>$dob</span> <br>
                        <b>Contact:</b> <span style='color: cornflowerblue;'>$contact</span> <br>
                        <b>Address:</b> <span style='color: cornflowerblue;'>$address</span> <br>
                        <b>City:</b> <span style='color: cornflowerblue;'>$city</span> <br>
                        <b>State:</b> <span style='color: cornflowerblue;'>$state</span> <br>
                        <b>Pincode:</b> <span style='color: cornflowerblue;'>$pincode</span> <br>
                        <b>University:</b> <span style='color: cornflowerblue;'>$university</span> <br>
                        <b>Why do you want to join the AISU? </b> <span style='color: cornflowerblue;'>$whyAISU</span> <br>
                        <b>How did you hear about us?</b> <span style='color: cornflowerblue;'>$hearAISU</span> <br>
                        <b>How would you like to contribute to the AlSU?</b> <span
                            style='color: cornflowerblue;'>$howAISU</span> <br>
                    </p>
                    <p style='color: red;'>
                        Thanks & Regards <br>
                        AISU
                    </p>
                    <p><b>Contact us:</b> support@aisu4india.in</p>
                    <div>
                        <a href='https://twitter.com/Official_AISU'><img src='https://img.freepik.com/free-vector/twitter-logo-design_1035-8934.jpg?w=740&t=st=1686774652~exp=1686775252~hmac=ab0c82a1547992e810ef569fd855dd01088de53da6c4750b7abb0f037ebc5feb' alt='' style='height: 50px;'></a>
                        <a href='https://youtube.com/@official_AISU'><img
                                src='https://img.freepik.com/free-psd/youtube-logo-icon-isolated-3d-render-illustration_47987-9790.jpg?size=626&ext=jpg&uid=R70082888&ga=GA1.1.903730306.1655306128&semt=sph'
                                alt='' style='height: 50px'></a>
                        <a href='https://instagram.com/aisu4india?igshid=OTk0YzhjMDVlZA=='><img
                            src='https://img.freepik.com/free-psd/3d-square-with-instagram-logo_125540-1566.jpg?size=626&ext=jpg&uid=R70082888&ga=GA1.2.903730306.1655306128&semt=sph'
                            alt='' style='height: 50px;'></a>
                        <a href='https://www.facebook.com/profile.php?id=100092878216816'><img
                                src='https://img.freepik.com/free-psd/3d-square-with-facebook-logo_125540-1565.jpg?w=900&t=st=1686774420~exp=1686775020~hmac=ddeb299dd88c4e6f45b1bd2234cc98c4ef98d5ca09ad28704c22eb1884ab4c6d'
                                alt='' style='height: 50px;'></a>
                        <a href='https://www.linkedin.com/company/officialaisu/'><img src='https://img.freepik.com/free-psd/3d-glowing-sphere-with-lindein-logo_125540-2953.jpg?w=900&t=st=1686774799~exp=1686775399~hmac=78a445e4e81942b19e5426bbfe298d39330ffb2f82087717aee993c505ed2922' alt='' style='height: 50px;'></a>
                    </div>
                </div>
            </div>
        </body>
        
        </html>";

        $mail->send();
        echo '<script>
                alert("Thank you for your interest in joining our community. we will contact you soon.");
                window.location.href = "https://aisu4india.in/";
            </script>';
    } catch (Exception $e) {
        echo '<script>
                alert("Please try again later.");
                window.location.href = "https://aisu4india.in/join-us/";
            </script>';
    }
}
