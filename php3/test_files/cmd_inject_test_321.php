<?php
// Command Injection test variation #321
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>