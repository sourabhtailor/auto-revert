<?php
// Command Injection test variation #637
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>