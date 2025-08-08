<?php
// Command Injection test variation #826
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>