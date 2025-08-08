<?php
// Command Injection test variation #644
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>