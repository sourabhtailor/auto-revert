<?php
// Command Injection test variation #151
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>