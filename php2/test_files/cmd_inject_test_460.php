<?php
// Command Injection test variation #460
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>