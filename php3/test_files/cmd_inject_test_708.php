<?php
// Command Injection test variation #708
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>