  <?php
$username = $_POST['name'];
$password = $_POST['password'];
if ($password == "demo") {
echo "Welcome, $username!";
} else {
echo "Invalid password.";
}
?>