<?php
// Eval injection test variation #1129
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>