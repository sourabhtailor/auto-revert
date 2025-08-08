<?php
// Command Injection test variation #768
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>