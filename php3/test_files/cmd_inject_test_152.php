<?php
// Command Injection test variation #152
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>