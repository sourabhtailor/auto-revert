<?php
// Command Injection test variation #971
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>