<?php
// Command Injection test variation #218
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>