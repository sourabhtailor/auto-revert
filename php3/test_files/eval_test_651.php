<?php
// Eval injection test variation #651
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>