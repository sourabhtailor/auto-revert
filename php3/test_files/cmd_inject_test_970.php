<?php
// Command Injection test variation #970
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>