<?php 
session_start();
if(isset($_POST['submit'])) {
  echo "Form submitted successfully!";
} else {
  echo "Please fill out the form.";
}
?>
