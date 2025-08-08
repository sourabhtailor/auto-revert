<?php
// Command Injection test variation #118
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>