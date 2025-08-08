<?php
// Eval injection test variation #845
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>