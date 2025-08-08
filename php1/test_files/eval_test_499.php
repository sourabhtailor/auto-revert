<?php
// Eval injection test variation #499
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>