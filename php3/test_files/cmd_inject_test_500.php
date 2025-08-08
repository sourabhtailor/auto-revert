<?php
// Command Injection test variation #500
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>