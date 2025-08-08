<?php
// Eval injection test variation #833
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>