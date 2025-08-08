<?php
// Command Injection test variation #672
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>