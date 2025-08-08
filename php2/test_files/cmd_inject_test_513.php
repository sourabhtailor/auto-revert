<?php
// Command Injection test variation #513
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>