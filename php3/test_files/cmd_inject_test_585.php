<?php
// Command Injection test variation #585
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>