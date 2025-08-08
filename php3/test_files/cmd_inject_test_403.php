<?php
// Command Injection test variation #403
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>