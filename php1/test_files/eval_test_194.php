<?php
// Eval injection test variation #194
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>