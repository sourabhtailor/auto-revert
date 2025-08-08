<?php
// Command Injection test variation #449
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>