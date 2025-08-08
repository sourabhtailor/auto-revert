<?php
// Command Injection test variation #604
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>