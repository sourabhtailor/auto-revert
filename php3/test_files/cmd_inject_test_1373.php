<?php
// Command Injection test variation #1373
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>