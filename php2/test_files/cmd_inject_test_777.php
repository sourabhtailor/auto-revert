<?php
// Command Injection test variation #777
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>