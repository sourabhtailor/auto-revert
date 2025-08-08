<?php
// Eval injection test variation #1154
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>