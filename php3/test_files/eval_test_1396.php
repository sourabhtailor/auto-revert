<?php
// Eval injection test variation #1396
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>