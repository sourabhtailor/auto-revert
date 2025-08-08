<?php
// Command Injection test variation #128
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>