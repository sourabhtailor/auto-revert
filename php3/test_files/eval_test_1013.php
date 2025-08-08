<?php
// Eval injection test variation #1013
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>