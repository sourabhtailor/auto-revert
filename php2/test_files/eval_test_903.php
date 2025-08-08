<?php
// Eval injection test variation #903
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>