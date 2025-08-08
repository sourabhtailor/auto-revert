<?php
// Command Injection test variation #416
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>