<?php
// Command Injection test variation #772
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>