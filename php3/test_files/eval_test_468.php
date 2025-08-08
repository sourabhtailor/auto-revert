<?php
// Eval injection test variation #468
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>