<?php
// Command Injection test variation #714
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>