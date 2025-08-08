<?php
// Command Injection test variation #638
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>