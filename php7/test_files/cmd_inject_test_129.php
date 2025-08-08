<?php
// Command Injection test variation #129
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>