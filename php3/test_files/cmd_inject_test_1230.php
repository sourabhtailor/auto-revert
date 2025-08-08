<?php
// Command Injection test variation #1230
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>