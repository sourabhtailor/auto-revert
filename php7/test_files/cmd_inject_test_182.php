<?php
// Command Injection test variation #182
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>