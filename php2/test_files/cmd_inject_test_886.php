<?php
// Command Injection test variation #886
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>