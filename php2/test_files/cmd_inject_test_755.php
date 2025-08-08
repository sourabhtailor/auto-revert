<?php
// Command Injection test variation #755
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>