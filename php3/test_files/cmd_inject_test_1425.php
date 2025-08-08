<?php
// Command Injection test variation #1425
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>