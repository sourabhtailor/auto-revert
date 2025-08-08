<?php
// Command Injection test variation #561
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>