<?php
// Eval injection test variation #608
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>