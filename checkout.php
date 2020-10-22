<?php
include('header.html');
echo "<h1>Checkout page</h1>";


if($_SERVER['REQUEST_METHOD']=='POST') {
    
    require('mysqli_connect.php');
    
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $payment = $_POST['payment'];
        $cardholdername = $_POST['cardholdername'];
        $cardnumber = $_POST['cardnumber'];
        $expirydate = $_POST['expirydate'];
        $cvvcode = $_POST['cvvcode'];
    
    
    
    
        if((empty($firstname))){
             //echo "Enter your  Name .";
            //$errors= true;
             echo "<p>Enter your firstname</p> ";
        }
        else{
             $firstname = mysqli_real_escape_string($dbc,$_POST['firstname']);
        }
        if((empty($lastname))){
                 //echo "Enter your  Name .";
                //$errors= true;
                 echo "<p>Enter your lastname</p> ";
            }
            else{
                 $lastname = mysqli_real_escape_string($dbc,$_POST['lastname']);
            }
        if((!isset($payment))){
                 //echo "Enter your  Name .";
                //$errors= true;
                 echo "<p>Enter your payment mode </p>";
            }
            else{
                 $payment = mysqli_real_escape_string($dbc,$_POST['payment']);
            }
            if((empty($cardholdername))){
                         //echo "Enter your  Name .";
                        //$errors= true;
                         echo "<p>Enter  cardholdername </p>";
                    }
                    else{
                         $cardholdername = mysqli_real_escape_string($dbc,$_POST['cardholdername']);
                    }
            if((empty($cardnumber))){
                         //echo "Enter your  Name .";
                        //$errors= true;
                         echo "<p>Enter  cardnumber </p>";
                    }
                    else{
                         $cardnumber = mysqli_real_escape_string($dbc,$_POST['cardnumber']);
                    }
             if((empty($expirydate))){
                         //echo "Enter your  Name .";
                        //$errors= true;
                         echo "<p>Enter  expirydate </p>";
                    }
                    else{
                         $expirydate = mysqli_real_escape_string($dbc,$_POST['expirydate']);
                    }
            if((empty($cvvcode))){
                             //echo "Enter your  Name .";
                            //$errors= true;
                             echo " <p>Enter  cvvcode </p>";
                        }
                        else{
                             $cvvcode = mysqli_real_escape_string($dbc,$_POST['cvvcode']);
                        }
    
     $q1 = "INSERT INTO customer (firstname,lastname) VALUES ('$firstname','$lastname')";
     $q2 = "INSERT INTO payment (cardholdername,cardnumber,expirydate,cvv) VALUES ('$cardholdername','$cardnumber','$expirydate','$cvvcode')";

            $result = @mysqli_query($dbc,$q1);
            $result1 = @mysqli_query($dbc,$q2);
    
    
            if($result){
                echo "<p><strong>Thank you $firstname </strong></p>";
            }
            else{
                echo "<p><strong>Error at data insertion</strong></p>";
            }

     if($result1){
                echo "<p><strong>your payment had done</strong></p> ";
            }
            else{
                echo "<p><strong>Error in payment</strong></p>";
            }

       
}
?>