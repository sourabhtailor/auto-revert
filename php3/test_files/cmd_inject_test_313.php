<?php
// Command Injection test variation #313
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>