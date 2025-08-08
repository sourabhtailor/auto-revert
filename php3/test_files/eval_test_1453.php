<?php
// Eval injection test variation #1453
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>