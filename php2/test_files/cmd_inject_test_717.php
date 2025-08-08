<?php
// Command Injection test variation #717
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>