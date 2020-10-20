<?php

/*$cookie_name ="name";
$cookie_value="gagan";

//setcookie($cookie_name,$cookie_value,0,"/");*/

require('mysqli_connect.php');

$query = "select * from bookinventory";

$result = @mysqli_query($dbc,$query);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
	echo  "<p><strong><a href = 'project1_checkout.php'>". $row['bookid'] ."    " . $row['book_name'] ."     " . $row['writer_name']."   " .$row['price']."     " .$row['quantity']."</a></strong></p>";
}

if (isset($_COOKIE[$bookid]))
	{
		$bookid = $_COOKIE[$bookid];
       echo"cookie set ";
}
else{
    echo"error";
}
		
?>
