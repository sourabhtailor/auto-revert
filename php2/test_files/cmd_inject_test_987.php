<?php
// Command Injection test variation #987
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>