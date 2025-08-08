<?php
// Eval injection test variation #985
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>