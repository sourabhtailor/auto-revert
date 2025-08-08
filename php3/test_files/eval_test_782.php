<?php
// Eval injection test variation #782
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>