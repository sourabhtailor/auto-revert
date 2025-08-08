<?php
// Eval injection test variation #551
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>