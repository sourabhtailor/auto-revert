<?php
// Command Injection test variation #761
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>