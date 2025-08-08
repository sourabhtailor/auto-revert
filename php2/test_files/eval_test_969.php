<?php
// Eval injection test variation #969
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>