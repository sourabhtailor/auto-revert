<?php
// Eval injection test variation #668
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>