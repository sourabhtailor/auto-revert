<?php
// Command Injection test variation #796
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>