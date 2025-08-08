<?php
// Command Injection test variation #533
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>