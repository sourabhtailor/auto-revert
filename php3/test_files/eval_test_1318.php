<?php
// Eval injection test variation #1318
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>