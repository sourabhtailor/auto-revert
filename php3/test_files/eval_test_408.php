<?php
// Eval injection test variation #408
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>