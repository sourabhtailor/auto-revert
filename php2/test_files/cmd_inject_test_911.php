<?php
// Command Injection test variation #911
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>