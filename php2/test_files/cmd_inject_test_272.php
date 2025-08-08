<?php
// Command Injection test variation #272
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>