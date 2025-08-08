<?php
// Command Injection test variation #296
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>