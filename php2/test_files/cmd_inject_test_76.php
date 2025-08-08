<?php
// Command Injection test variation #76
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>