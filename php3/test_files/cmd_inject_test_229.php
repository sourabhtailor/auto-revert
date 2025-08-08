<?php
// Command Injection test variation #229
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>