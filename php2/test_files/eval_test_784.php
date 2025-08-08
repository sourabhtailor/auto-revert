<?php
// Eval injection test variation #784
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>