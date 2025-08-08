<?php
// Command Injection test variation #555
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>