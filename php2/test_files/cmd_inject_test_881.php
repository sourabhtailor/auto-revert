<?php
// Command Injection test variation #881
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>