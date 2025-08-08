<?php
// Command Injection test variation #888
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>