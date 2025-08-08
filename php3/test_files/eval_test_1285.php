<?php
// Eval injection test variation #1285
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>