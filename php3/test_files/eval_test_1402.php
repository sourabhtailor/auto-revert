<?php
// Eval injection test variation #1402
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>