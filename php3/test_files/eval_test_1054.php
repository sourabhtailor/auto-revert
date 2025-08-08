<?php
// Eval injection test variation #1054
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>