<?php
// Command Injection test variation #641
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>