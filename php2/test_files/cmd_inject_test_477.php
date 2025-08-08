<?php
// Command Injection test variation #477
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>