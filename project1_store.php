<?php
include('header.html');

  //session_start();
         
$cookie_name ="name";
$cookie_value="gagan";

setcookie($cookie_name,$cookie_value,0,"/");

require('mysqli_connect.php');

$query = "select * from bookinventory";

$result = @mysqli_query($dbc,$query);

 echo "<h1><strong>Books<strong></h1>";

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
	echo  "<p><strong><a href = 'project1_checkout.php'>". $row['bookid'] ."    " . $row['book_name'] ."     " . $row['writer_name']."   " .$row['price']."     " .$row['quantity']."</a></strong></p>";
}
 /*if( mysqli_num_rows($row)){
         $_SESSION['id']=true;
         header('location:project1_checkout.php');
    }
    else{
        echo "PLease enter correct id";
        header('location:project1_store.php');
    }

*/
/*session_unset();
session_destroy();*/
/*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
	if (isset($_GET['id'])){ 
		$id = $_GET['id'];
		//echo $id;
		$q = "SELECT * FROM bookinventory where bookid = '$id'";
		$r = @mysqli_query($dbc, $q);
      session_start();
          if( mysqli_num_rows($r)){
         $_SESSION['id']=true;
         header('location:checkout.php');
    }
    else{
        echo "PLease enter correct id";
        header('location:item.php');
    }
		while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
            echo '<p> Book id: ' . $row['bookid'] . "</p>";
			echo '<p> Book Name: ' . $row['book_name'] . "</p>";
            echo '<p> Writer Name: ' . $row['writer_name'] . "</p>";
			echo '<p> Price: ' . $row['price'] . "</p>";
			echo '<p> Quantity: ' . $row['quantity'] . "</p>";
		}		
	}
}*/
	
?>
<html>
    <head>
    <link href="sticky-footer-navbar.css" rel="stylesheet"></head>
<body>
<!--<form action='project1_checkout.php' method='POST'>
<label>How Many books you want  </label>
<input type='text' name='quantity'>
<input type='hidden' name='item' value='<?php echo $bookid ?>'>
<input type='submit'>
</form>-->
    </body>
</html>
<?php
include('footer.html');
?>
