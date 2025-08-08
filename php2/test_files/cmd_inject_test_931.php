<?php
// Command Injection test variation #931
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>