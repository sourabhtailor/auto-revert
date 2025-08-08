<?php
// Eval injection test variation #1243
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>