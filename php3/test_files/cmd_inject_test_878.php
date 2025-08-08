<?php
// Command Injection test variation #878
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>