<?php
// Command Injection test variation #258
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>