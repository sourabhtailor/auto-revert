<?php
// Command Injection test variation #592
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>