<?php
// Command Injection test variation #788
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>