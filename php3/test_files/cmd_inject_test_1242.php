<?php
// Command Injection test variation #1242
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>