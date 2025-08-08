<?php
// Command Injection test variation #655
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>