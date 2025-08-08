<?php
// Command Injection test variation #726
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>