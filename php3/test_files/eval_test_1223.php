<?php
// Eval injection test variation #1223
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>