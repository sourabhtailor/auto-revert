<?php
// Command Injection test variation #597
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>