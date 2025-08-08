<?php
// Eval injection test variation #683
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>