<?php
// Command Injection test variation #339
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>