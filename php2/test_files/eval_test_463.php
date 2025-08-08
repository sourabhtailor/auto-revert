<?php
// Eval injection test variation #463
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>