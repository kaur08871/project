<?php

echo "Checkout page";
if (isset($_POST['item']) && isset($_POST['quantity']))
{
    
}




?>
<html>
<body>
<form action="project1_checkout.php" method="POST">
	<p><lable>Firstname:</lable> <input type="text" name="firstname"></p>
	<p><lable>Lastname:</lable> <input type="text" name="lastname"></p>
    <p>Please select your Payment method:</p>
      <input type="radio" id="debit" name="payment" value="Debit">
      <label for="debit">Debit Card</label><br>
      <input type="radio" id="credit" name="payment" value="Credit">
      <label for="credit">Credit Card</label><br>
    <p><lable>Card Holder Name:</lable> <input type="text" name="cardholdername"></p>
    <p><lable>Card Number:</lable> <input type="number" name="cardNumber"></p>
    <p><lable>Expiry Date</lable> <input type="date" name="expirydate"></p>
    <p><lable>CVV Code: </lable> <input type="number" name="cvvcode" minlength="3" maxlength="3"></p>
	<input type="submit" value="Submit ">
</form>
</body>
</html>