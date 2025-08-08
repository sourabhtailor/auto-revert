<?php
// Eval injection test variation #999
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>