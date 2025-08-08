<?php
// Eval injection test variation #611
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>