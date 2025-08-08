<?php
// Eval injection test variation #84
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>