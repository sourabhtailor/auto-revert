<?php
// Eval injection test variation #564
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>