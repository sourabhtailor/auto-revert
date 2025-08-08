<?php
// Command Injection test variation #921
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>