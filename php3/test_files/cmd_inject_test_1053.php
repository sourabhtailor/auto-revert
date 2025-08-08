<?php
// Command Injection test variation #1053
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>