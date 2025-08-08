<?php
// Command Injection test variation #1306
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>