<?php
// Command Injection test variation #715
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>