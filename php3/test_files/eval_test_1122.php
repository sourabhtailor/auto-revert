<?php
// Eval injection test variation #1122
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>