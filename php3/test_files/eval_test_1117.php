<?php
// Eval injection test variation #1117
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>