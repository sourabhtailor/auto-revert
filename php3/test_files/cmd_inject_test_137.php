<?php
// Command Injection test variation #137
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>