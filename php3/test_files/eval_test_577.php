<?php
// Eval injection test variation #577
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>