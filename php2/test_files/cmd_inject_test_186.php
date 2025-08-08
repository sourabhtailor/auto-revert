<?php
// Command Injection test variation #186
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>