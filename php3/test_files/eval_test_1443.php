<?php
// Eval injection test variation #1443
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>