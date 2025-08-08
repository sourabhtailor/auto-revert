<?php
// Eval injection test variation #67
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>