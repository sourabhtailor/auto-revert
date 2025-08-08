<?php
// Command Injection test variation #512
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>