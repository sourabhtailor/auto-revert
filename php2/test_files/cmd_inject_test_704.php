<?php
// Command Injection test variation #704
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>