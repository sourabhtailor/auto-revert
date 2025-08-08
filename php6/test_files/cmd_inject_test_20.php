<?php
// Command Injection test variation #20
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>