<?php
// Command Injection test variation #423
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>