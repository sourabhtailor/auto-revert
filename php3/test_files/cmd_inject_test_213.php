<?php
// Command Injection test variation #213
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>