<?php
// Command Injection test variation #540
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>