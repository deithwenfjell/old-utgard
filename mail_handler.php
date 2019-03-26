<html>
<body>

<?php 
if(isset($_POST['submit'])){
    $to = "david.klinovsky@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];

    $message = $name . " napísal následujúce:" . "\n\n" . $_POST['message'];
    $message2 = "Sem je kópia Vašej správy, " . $name . "\n\n" . $_POST['message'];
    $statinfo = "3tatistické info: " . "\n\n" . $date . "\n" . $radio;

    $headers = "Od:" . $from;
    $headers2 = "Od:" . $to;
    mail($to,$message,$headers,$statinfo);
    mail($from,$message2,$headers2,$statinfo); // sends a copy of the message to the sender
    echo "Správa odoslaná. Ďakujeme " . $name . ", budeme Vás prípadne kontaktovať.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>

</body>
</html>