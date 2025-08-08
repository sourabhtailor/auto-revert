<?php
// Command Injection test variation #364
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>