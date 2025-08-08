<?php
// Eval injection test variation #404
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>