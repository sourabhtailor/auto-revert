<?php
// Command Injection test variation #51
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>