<?php
// Command Injection test variation #618
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>