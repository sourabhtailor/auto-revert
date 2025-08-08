<?php
// Eval injection test variation #387
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>