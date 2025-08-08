<?php
// Eval injection test variation #1116
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>