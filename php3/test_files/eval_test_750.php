<?php
// Eval injection test variation #750
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>