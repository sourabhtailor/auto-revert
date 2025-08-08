<?php
// Eval injection test variation #1133
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>