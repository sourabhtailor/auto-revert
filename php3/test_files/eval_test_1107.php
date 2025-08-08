<?php
// Eval injection test variation #1107
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>