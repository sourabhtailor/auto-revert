<?php
// Command Injection test variation #140
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>