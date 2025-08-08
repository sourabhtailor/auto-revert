<?php
// Command Injection test variation #204
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>