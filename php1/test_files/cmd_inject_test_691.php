<?php
// Command Injection test variation #691
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>