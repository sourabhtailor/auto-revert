<?php
// Command Injection test variation #167
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>