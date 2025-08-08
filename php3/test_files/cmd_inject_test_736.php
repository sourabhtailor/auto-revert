<?php
// Command Injection test variation #736
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>