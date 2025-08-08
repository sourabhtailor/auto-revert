<?php
// Eval injection test variation #348
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>