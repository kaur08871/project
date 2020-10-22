<?php

require("mysqli_connect.php");

$q = "SELECT bookid, book_name FROM bookinventory";
	
$r = @mysqli_query($dbc, $q);

?>

<html>

<body>

<a href="project1_checkout.php">Checkout!</a>	
<?php
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	echo '<p><strong><a href="item.php?id=' . $row['bookid'] . '">' . $row['book_name'] . "</strong></p>";
}
?>
	
</body>

</html>