<?php
// Eval injection test variation #43
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>