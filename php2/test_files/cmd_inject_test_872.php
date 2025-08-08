<?php
// Command Injection test variation #872
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>