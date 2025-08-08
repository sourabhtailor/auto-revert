<?php
// Command Injection test variation #171
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>