<?php
// Command Injection test variation #629
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>