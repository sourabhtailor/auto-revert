<?php
// Eval injection test variation #1414
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>