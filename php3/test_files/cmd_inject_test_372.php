<?php
// Command Injection test variation #372
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>