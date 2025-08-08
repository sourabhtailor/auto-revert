<?php
// Eval injection test variation #339
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>