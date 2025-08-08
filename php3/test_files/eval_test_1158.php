<?php
// Eval injection test variation #1158
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>