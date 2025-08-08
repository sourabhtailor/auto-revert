<?php
// Command Injection test variation #700
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>