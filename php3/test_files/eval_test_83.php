<?php
// Eval injection test variation #83
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>