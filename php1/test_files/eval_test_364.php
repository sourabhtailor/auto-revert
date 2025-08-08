<?php
// Eval injection test variation #364
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>