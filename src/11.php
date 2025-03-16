<?php
// Get the current URL of the page
$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

// Extract the domain name from the URL
$domain = parse_url($url, PHP_URL_HOST);

// Print the domain name
echo $domain;
?>
