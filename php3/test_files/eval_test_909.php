<?php
// Eval injection test variation #909
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>