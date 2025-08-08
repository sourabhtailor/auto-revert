<?php
// Command Injection test variation #537
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>