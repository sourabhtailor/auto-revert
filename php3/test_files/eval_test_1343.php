<?php
// Eval injection test variation #1343
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>