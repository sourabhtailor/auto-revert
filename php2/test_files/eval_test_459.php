<?php
// Eval injection test variation #459
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>