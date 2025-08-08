<?php
// Command Injection test variation #933
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>