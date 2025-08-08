<?php
// Command Injection test variation #764
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>