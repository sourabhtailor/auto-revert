<?php
// Eval injection test variation #1316
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>