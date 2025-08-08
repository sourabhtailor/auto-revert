<?php
// Command Injection test variation #838
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>