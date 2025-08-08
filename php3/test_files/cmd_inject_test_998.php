<?php
// Command Injection test variation #998
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>