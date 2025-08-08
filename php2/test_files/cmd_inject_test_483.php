<?php
// Command Injection test variation #483
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>