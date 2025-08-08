<?php
// Command Injection test variation #498
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>