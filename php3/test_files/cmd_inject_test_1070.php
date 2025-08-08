<?php
// Command Injection test variation #1070
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>