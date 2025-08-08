<?php
// Command Injection test variation #967
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>