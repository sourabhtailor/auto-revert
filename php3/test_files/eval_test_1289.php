<?php
// Eval injection test variation #1289
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>