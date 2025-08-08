<?php
// Eval injection test variation #380
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>