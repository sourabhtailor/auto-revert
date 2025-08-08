<?php
// Eval injection test variation #1286
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>