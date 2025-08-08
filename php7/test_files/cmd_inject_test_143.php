<?php
// Command Injection test variation #143
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>