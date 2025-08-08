<?php
// Command Injection test variation #323
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>