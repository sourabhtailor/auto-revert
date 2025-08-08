<?php
// Eval injection test variation #775
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>