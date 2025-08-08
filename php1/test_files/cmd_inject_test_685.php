<?php
// Command Injection test variation #685
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>