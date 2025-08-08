<?php
// Command Injection test variation #599
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>