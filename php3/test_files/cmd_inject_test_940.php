<?php
// Command Injection test variation #940
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>