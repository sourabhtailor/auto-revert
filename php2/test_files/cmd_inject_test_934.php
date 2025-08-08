<?php
// Command Injection test variation #934
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>