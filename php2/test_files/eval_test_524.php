<?php
// Eval injection test variation #524
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>