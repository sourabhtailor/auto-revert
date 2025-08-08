<?php
// Eval injection test variation #29
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>