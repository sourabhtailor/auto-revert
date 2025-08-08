<?php
// Eval injection test variation #910
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>