<?php
// Eval injection test variation #492
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>