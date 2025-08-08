<?php
// Command Injection test variation #675
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>