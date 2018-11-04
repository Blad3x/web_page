<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

$result2=mysqli_query($con2, "select * from products")or die('Error In Session2');
$row2=mysqli_fetch_array($result2);
//where ID='1'
 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-welcome"> 
    <center><h4>Welcome: <?php echo $row['username']; ?> </h4></center>
	 <div class="reminder">
    <p><a href="logout.php">Log out</a></p>
  </div>
</div>
<!-- <p><h2> E-mails: /*<?php echo $row2['User'] ." " .$row2['Password'] . " " .$row2['Description'] ; ?>*/ </h2></p> -->
<p><?php /*if ($result2) {
         do{
            $id = $row2['id'];
            $type_val = $row2 ['type'];
			$name_val = $row2 ['name'];
			$price_val = $row2 ['price'];
			$description_val = $row2 ['description'];
            $product_list = "$id - $type_val &nbsp; &nbsp; &nbsp; 
			$name_val &nbsp; &nbsp; &nbsp; 
			$price_val &nbsp; &nbsp; &nbsp; 
			$description_val &nbsp; &nbsp; &nbsp; 
			
			<a href='#'>edit</a> &nbsp; &bull; <a href='#'>delete</a>  

            <br/>";
        echo $product_list;
    }
	 while($row2 = $result2->fetch_assoc());
} else {
    $product_list = "You have no products listed in your store yet";
}


*/?></p>
<div class="meniu1"><center>
<form action="#" method="post">
<input type="submit" class="button" title="Meniu" name="meniu" value="MMeniu"></input>
</form>
</center></div>

<div class="content1"><center><?php
 echo "<table id=\"products\">";
 echo "<tr><th>" . "ID" . "</th><th>" . "User" . "</th><th> " . "Password" . "</th><th>" . "Description" . "</th></tr>";
        do
          {
          echo '<tr><td>'.$row2['id'].'</td><td>'.$row2['type'].'</td><td>'.$row2['name'].'</td><td>'.$row2['price'].' RON </td></tr>'; //these are the fields that you have stored in your database table employee
          }
		while($row2 = mysqli_fetch_array($result2));
 echo "</table>";
 mysqli_close($con);
?></center></div>
</body>
</html>