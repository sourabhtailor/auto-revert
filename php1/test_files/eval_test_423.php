<?php
// Eval injection test variation #423
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>