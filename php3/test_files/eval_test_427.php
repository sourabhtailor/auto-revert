<?php
// Eval injection test variation #427
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>