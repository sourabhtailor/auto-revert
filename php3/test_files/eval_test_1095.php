<?php
// Eval injection test variation #1095
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>