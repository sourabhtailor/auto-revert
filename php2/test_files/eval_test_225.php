<?php
// Eval injection test variation #225
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>