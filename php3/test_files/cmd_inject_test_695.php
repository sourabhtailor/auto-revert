<?php
// Command Injection test variation #695
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>