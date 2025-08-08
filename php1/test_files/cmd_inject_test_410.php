<?php
// Command Injection test variation #410
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>