<?php
// Eval injection test variation #1008
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>