<?php
// Command Injection test variation #487
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>