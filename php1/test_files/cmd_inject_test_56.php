<?php
// Command Injection test variation #56
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>