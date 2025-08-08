<?php
// Eval injection test variation #447
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>