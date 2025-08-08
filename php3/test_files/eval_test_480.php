<?php
// Eval injection test variation #480
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>