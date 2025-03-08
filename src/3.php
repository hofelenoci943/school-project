  <?php
$con=mysqli_connect('host','username','password','database');
if(!$con)
{
die("Connection failed".mysqli_error());
}
else{
echo "Connected successfully";
}
mysqli_close($con);
?>