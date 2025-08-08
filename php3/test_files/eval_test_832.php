<?php
// Eval injection test variation #832
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>