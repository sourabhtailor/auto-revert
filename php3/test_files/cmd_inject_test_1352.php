<?php
// Command Injection test variation #1352
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>