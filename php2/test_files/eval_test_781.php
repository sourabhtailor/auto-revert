<?php
// Eval injection test variation #781
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>