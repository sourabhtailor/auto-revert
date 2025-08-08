<?php
// Command Injection test variation #1489
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>