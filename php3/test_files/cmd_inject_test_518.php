<?php
// Command Injection test variation #518
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>