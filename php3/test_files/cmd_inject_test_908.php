<?php
// Command Injection test variation #908
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>