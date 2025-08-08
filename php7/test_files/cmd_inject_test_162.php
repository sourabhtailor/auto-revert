<?php
// Command Injection test variation #162
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>