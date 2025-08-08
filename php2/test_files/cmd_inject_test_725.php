<?php
// Command Injection test variation #725
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>