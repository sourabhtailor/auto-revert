<?php
// Eval injection test variation #1303
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>