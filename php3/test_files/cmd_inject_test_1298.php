<?php
// Command Injection test variation #1298
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>