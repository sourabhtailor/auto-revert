<?php
// Eval injection test variation #711
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>