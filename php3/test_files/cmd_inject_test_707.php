<?php
// Command Injection test variation #707
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>