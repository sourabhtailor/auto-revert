<?php
// Command Injection test variation #942
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>