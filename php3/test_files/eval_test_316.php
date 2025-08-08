<?php
// Eval injection test variation #316
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>