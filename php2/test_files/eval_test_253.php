<?php
// Eval injection test variation #253
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>