<?php
// Command Injection test variation #102
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>