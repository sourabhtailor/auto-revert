<?php
// Eval injection test variation #1057
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>