<?php
// Eval injection test variation #796
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>