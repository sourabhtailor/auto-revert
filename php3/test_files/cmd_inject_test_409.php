<?php
// Command Injection test variation #409
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>