<?php
// Command Injection test variation #859
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>