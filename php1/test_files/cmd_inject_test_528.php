<?php
// Command Injection test variation #528
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>