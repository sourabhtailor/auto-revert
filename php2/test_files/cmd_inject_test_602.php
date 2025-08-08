<?php
// Command Injection test variation #602
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>