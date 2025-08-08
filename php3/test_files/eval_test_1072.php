<?php
// Eval injection test variation #1072
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>