<?php
// Command Injection test variation #1153
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>