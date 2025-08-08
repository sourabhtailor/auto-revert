<?php
// Command Injection test variation #230
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>