<?php
// Command Injection test variation #649
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>