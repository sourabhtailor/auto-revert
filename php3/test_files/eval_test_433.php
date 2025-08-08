<?php
// Eval injection test variation #433
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>