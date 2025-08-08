<?php
// Command Injection test variation #529
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>