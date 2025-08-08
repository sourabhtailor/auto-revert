<?php
// Command Injection test variation #581
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>