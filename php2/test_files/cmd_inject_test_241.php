<?php
// Command Injection test variation #241
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>