<?php
// Command Injection test variation #375
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>