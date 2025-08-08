<?php
// Command Injection test variation #850
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>