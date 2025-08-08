<?php
// Command Injection test variation #836
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>