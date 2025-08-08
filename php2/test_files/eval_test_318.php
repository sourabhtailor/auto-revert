<?php
// Eval injection test variation #318
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>